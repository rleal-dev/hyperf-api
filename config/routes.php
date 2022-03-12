<?php

declare(strict_types=1);

use App\Controller\UserController;
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});


Router::addGroup('/users', function () {
    Router::get('', [UserController::class, 'index']);
    Router::get('/{id}', [UserController::class, 'show']);
    Router::post('', [UserController::class, 'store']);
    Router::delete('/{id}', [UserController::class, 'delete']);
});
