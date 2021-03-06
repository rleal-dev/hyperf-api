<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AbstractController;
use App\Request\UserRequest;
use App\Service\UserService;
use Hyperf\HttpServer\Annotation\{
    Controller, DeleteMapping, GetMapping, PostMapping, PutMapping
};

#[Controller]
class UserController extends AbstractController
{
    public function __construct(
        private UserService $userService,
    ) {
    }

    #[GetMapping(path: '')]
    public function index()
    {
        $users = $this->userService->findAll();

        return $this->success('User List Ok', $users);
    }

    #[GetMapping(path: '{id}')]
    public function show(int $id)
    {
        $user = $this->userService->findOne($id);

        // return $this->response->json($user);
    }

    #[PostMapping(path: '')]
    public function store(UserRequest $request)
    {
        $user = $this->userService->store($request->validated());

        // return $this->response->json($user);
    }

    #[PutMapping(path: '{id}')]
    public function update(UserRequest $request, int $id)
    {
        $user = $this->userService->update($id, $request->validated());

        // return $this->response->json($user);
    }

    #[DeleteMapping(path: '{id}')]
    public function delete(int $id)
    {
        $this->userService->delete($id);

        // return $this->response->json([
        //     'message' => 'user deleted successfully!',
        // ]);
    }
}
