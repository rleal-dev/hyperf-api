<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Model\Role;
use App\Request\RoleRequest;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

#[AutoController]
class RoleController
{
    public function index(ResponseInterface $response)
    {
        $roles = Role::get();

        return $response->json($roles);
    }

    public function show(string $id)
    {
        return Role::find($id);
    }

    public function store(RoleRequest $request)
    {
        return Role::create($request->validated());
    }

    public function update(RoleRequest $request, int $id)
    {
        $role = Role::findOrFail($id);

        return $role->update($request->validated());
    }

    public function delete(string $id)
    {
        return Role::destroy($id);
    }
}
