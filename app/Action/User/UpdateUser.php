<?php

namespace App\Action\User;

use App\Model\User;
use App\Request\UserRequest;

class UpdateUser
{
    public function execute(int $id, UserRequest $request): bool
    {
        $user = User::findOrFail($id);

        return $user->update($request->all());
    }
}
