<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Hyperf\HttpServer\Annotation\{Controller, RequestMapping};

#[Controller(prefix: '/')]
class HomeController
{
    #[RequestMapping(path: '', methods: 'get')]
    public function index()
    {
        return [
            'message' => 'Hyperf Api',
        ];
    }
}
