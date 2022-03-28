<?php

declare(strict_types=1);

namespace App\Controllers\Auth;

use App\Actions\Auth\Register;
use App\Requests\Auth\RegisterRequest;
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
