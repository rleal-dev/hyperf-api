<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Model\User;
use App\Request\UserRequest;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

#[AutoController(prefix: '/users')]
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
