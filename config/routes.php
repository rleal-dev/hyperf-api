<?php

declare(strict_types=1);

use App\Controller;
use Hyperf\HttpServer\Router\Router;

Router::addGroup('/api/v1/', function () {
    Router::get('', [Controller\HomeController::class, 'index']);

    Router::addGroup('users', function () {
        Router::get('', [Controller\UserController::class, 'index']);
        Router::get('/{id}', [Controller\UserController::class, 'show']);
        Router::post('', [Controller\UserController::class, 'store']);
        Router::delete('/{id}', [Controller\UserController::class, 'delete']);
    });
});
