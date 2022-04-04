<?php

declare(strict_types=1);

namespace App\Controller\Api\Auth;

use App\Action\Auth\Register;
use App\Request\Auth\RegisterRequest;
use Hyperf\HttpServer\Annotation\{Controller, RequestMapping};
use Throwable;

#[Controller('/register')]
class RegisterController
{
    #[RequestMapping(path: '', methods: 'post')]
    public function index(RegisterRequest $request, Register $action)
    {
        try {
            $user = $action->execute($request);
        } catch (Throwable $exception) {
            throw new $exception;

            return [

            ];
        }

        return $user;
    }
}
