<?php


namespace App\Services\ApiResponse\Responses;

use Illuminate\Http\JsonResponse;

class JsonApiResponse implements ApiResponseInterface
{
    /**
     * @param $data
     * @param $code
     * @return JsonResponse
     */
    public function successResponse($data, $code): JsonResponse
    {
        return response()->json(['data' => $data, 'code' => $code], $code);
    }

    /**
     * @param $errors
     * @param $code
     * @return JsonResponse
     */
    public function errorResponse($errors, $code): JsonResponse
    {
        return response()->json(['errors' => $errors, 'code' => $code], $code);
    }
}
