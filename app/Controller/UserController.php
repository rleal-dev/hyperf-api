<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\User;
use App\Request\UserRequest;
use Hyperf\HttpServer\Contract\ResponseInterface;

class UserController
{
    public function index(ResponseInterface $response)
    {
        $users = User::get();

        return $response->json($users);
    }

    public function show(string $id)
    {
        return User::find($id);
    }

    public function store(UserRequest $request)
    {
        return User::create($request->validated());
    }

    public function delete(string $id)
    {
        return User::destroy($id);
    }
}
