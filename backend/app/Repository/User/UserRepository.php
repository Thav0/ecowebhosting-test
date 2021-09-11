<?php

namespace App\Repository\User;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{

  public function create(UserStoreRequest $request)
  {
    $userStoreRequest = $request->validated();

    // Hash the password
    $userStoreRequest['password'] = Hash::make($userStoreRequest['password']);

    try {
      User::create($userStoreRequest);
    } catch (\Throwable $th) {
      throw $th;
      report($th);
    }
  }

  public function update(UserUpdateRequest $request, int $id)
  {
    try {
      $user = User::find($id);

      if (!$user) {
        throw new Error('User not found!');
      }

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;

      $user->save();

      return $user;
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function delete(int $id)
  {
    try {
      $user = User::find($id);

      if (!$user) {
        throw new Error('No user was found!');
      }

      return $user->delete();
    } catch (\Throwable $th) {
      throw $th;
      report($th);
    }
  }

  public function getAll()
  {
    try {
      return User::all();
    } catch (\Throwable $th) {
      throw $th;
      report($th);
    }
  }

  public function getById(int $id)
  {
    try {
      $user = User::find($id);

      if (!$user) {
        return array('message' => 'Any user was found');
      }

      return $user;
    } catch (\Throwable $th) {
      throw $th;
      report($th);
    }
  }
}
