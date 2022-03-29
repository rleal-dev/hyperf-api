<?php

declare(strict_types=1);

namespace App\Controller\Api\Auth;

use Hyperf\HttpServer\Annotation\{Controller, RequestMapping};

#[Controller('/login')]
class LoginController
{
    #[RequestMapping(path: '', methods: 'post')]
    public function index()
    {
        return [
            'message' => 'Hyperf Api',
        ];
    }
}
