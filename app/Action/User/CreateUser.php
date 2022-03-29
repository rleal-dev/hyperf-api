<?php

namespace App\Action\User;

use App\Model\User;
use App\Request\UserRequest;

class CreateUser
{
    public function execute(UserRequest $request): User
    {
        return User::create($request->validated());
    }
}
