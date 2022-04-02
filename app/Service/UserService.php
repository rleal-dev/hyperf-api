<?php

declare(strict_types=1);

namespace App\Service;

use App\Model\User;

class UserService
{
    public function findAll()
    {
        return User::all();
    }

    public function store($data): User
    {
        return User::create($data);
    }

    public function findOne(int $id): User
    {
        return User::findOrFail($id);
    }

    public function update(int $id, $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);

        return $user;
    }

    public function delete(int $id)
    {
        $user = User::findOrFail($id);

        return $user->delete();
    }
}
