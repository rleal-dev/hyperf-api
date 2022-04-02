<?php

declare(strict_types=1);

namespace App\Controller\Api;

use Hyperf\HttpServer\Annotation\{Controller, GetMapping};
use Hyperf\HttpServer\Contract\ResponseInterface;

#[Controller(prefix: 'api')]
class HomeController
{
    #[GetMapping(path: '')]
    public function index(ResponseInterface $response)
    {
        return $response->json([
            'message' => 'Hyperf Api',
        ]);
    }
}
