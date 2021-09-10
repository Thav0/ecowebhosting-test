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
    $request->validate();
    try {
      User::create($request->validated());
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

      $user->save($request->validated());

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
