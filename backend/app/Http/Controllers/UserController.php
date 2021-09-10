<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repository\User\UserRepositoryInterface;

class UserController extends Controller
{
  private $repository;

  public function __construct(UserRepositoryInterface $repository)
  {
    $this->repository = $repository;
  }

  public function index()
  {
    $users = $this->repository->getAll();

    return response($users);
  }

  public function store(UserStoreRequest $request)
  {
    try {
      $this->repository->create($request);

      return response()->json(['message' => 'User created!'], 201);
    } catch (\Throwable $th) {

      return response('Failed to create new user', 400);
    }
  }

  public function update(UserUpdateRequest $request, int $id)
  {

    try {
      $userUpdated = $this->repository->update($request, $id);

      return response(array('user' => $userUpdated));
    } catch (\Throwable $th) {
      return response($th->getMessage(), 400);
    }
  }

  public function destroy(int $id)
  {
    try {
      $message = $this->repository->delete($id);

      return response($message, 204);
    } catch (\Throwable $th) {
      return response()->json(array('message' => $th->getMessage()), 400);
    }
  }

  public function show(int $id)
  {
    $user = $this->repository->getById($id);

    return response($user);
  }
}
