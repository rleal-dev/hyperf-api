<?php

declare(strict_types=1);

namespace App\Controller\Api\Traits;

use Hyperf\HttpServer\Contract\ResponseInterface;

trait ApiResponseTrait
{
    public function responseOk(string $message, $data = [])
    {
        return $this->response($message, $data);
    }

    public function response(
        string $message,
        $data = [],
        int $statusCode = 200,
    ) {
        $response 
        return $response->json([
            'statusCode' => $statusCode,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
