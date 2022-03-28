<?php

declare(strict_types=1);

namespace App\Controllers\Auth;

use Hyperf\HttpServer\Annotation\{Controller, RequestMapping};

#[Controller('/logout')]
class LogoutController
{
    #[RequestMapping(path: '', methods: 'delete')]
    public function index()
    {
        return [
            'message' => 'Hyperf Api',
        ];
    }
}
