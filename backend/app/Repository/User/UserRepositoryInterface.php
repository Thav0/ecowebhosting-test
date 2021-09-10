<?php

namespace App\Repository\User;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

interface UserRepositoryInterface {
    public function create(UserStoreRequest $request);
    public function update(UserUpdateRequest $request, int $id);
    public function delete(int $id);
    public function getAll();
    public function getById(int $id);
}