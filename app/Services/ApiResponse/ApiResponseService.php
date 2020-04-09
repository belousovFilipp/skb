<?php

namespace App\Services\ApiResponse;

use Illuminate\Http\JsonResponse;
use App\Services\ApiResponse\Responses\ApiResponseInterface;

class ApiResponseService
{
    /** @var ApiResponseInterface */
    private $apiResponse;

    /**
     * ApiResponseService constructor.
     * @param ApiResponseInterface $apiResponse
     */
    public function __construct(ApiResponseInterface $apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    /**
     * @param array $data
     * @param int $code
     * @return JsonResponse
     */
    public function success(array $data, $code = 200): JsonResponse
    {
        return $this->apiResponse->successResponse($data, $code);
    }

    /**
     * @param $errors
     * @param $code
     * @return JsonResponse
     */
    public function errors($errors, $code): JsonResponse
    {
        return $this->apiResponse->errorResponse($errors, $code);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function successCreated(array $data): JsonResponse
    {
        return $this->success($data, 201);
    }
}
