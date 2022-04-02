<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Model\Permission;
use App\Request\PermissionRequest;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\ResponseInterface;

#[AutoController]
class PermissionController
{
    public function index(ResponseInterface $response)
    {
        $permissions = Permission::get();

        return $response->json($permissions);
    }

    public function show(string $id)
    {
        return Permission::find($id);
    }

    public function store(PermissionRequest $request)
    {
        return Permission::create($request->validated());
    }

    public function update(PermissionRequest $request, int $id)
    {
        $permission = Permission::findOrFail($id);

        return $permission->update($request->validated());
    }

    public function delete(string $id)
    {
        return Permission::destroy($id);
    }
}
