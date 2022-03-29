<?php

namespace App\Action\Auth;

use App\Model\User;
use App\Requests\Auth\RegisterRequest;

class Register
{
    public function execute(RegisterRequest $request)
    {
        return User::create($request->validated());
    }
}
