<?php

namespace App\Action\User;

use App\Model\User;

class DeleteUser
{
    public function execute(int $id): bool
    {
        return User::destroy($id);
    }
}
