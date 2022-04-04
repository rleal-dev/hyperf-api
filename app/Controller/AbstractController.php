<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    /**
     * @Inject
     *
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @Inject
     *
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     *
     * @var ResponseInterface
     */
    protected $response;

    public function success($message, $data = [])
    {
        return $this->response($message, $data);
    }

    public function response($message, $data = [], $statusCode = 200)
    {
        return $this->response->json([
            'statusCode' => $statusCode,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
