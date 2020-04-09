<?php

namespace App\Services\ApiResponse\Responses;

use Illuminate\Http\JsonResponse;

interface ApiResponseInterface
{
    /**
     * @param $data
     * @param $code
     * @return JsonResponse
     */
    public function successResponse($data, $code): JsonResponse;

    /**
     * @param $message
     * @param $code
     * @return JsonResponse
     */
    public function errorResponse($message, $code): JsonResponse;
}
