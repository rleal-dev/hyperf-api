<?php

declare(strict_types=1);

namespace App\Controllers;

use Hyperf\HttpServer\Annotation\{Controller, RequestMapping};

#[Controller(prefix: '/')]
class HomeController
{
    #[RequestMapping(path: '', methods: 'post')]
    public function index()
    {
        return [
            'message' => 'Hyperf Api',
        ];
    }
}
