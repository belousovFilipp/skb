<?php

namespace App\Http\Controllers\Admin\Api\Feedbacks;

use App\Services\Feedbacks\FeedbacksService;
use App\Services\ApiResponse\ApiResponseService;
use App\Services\Transformer\TransformerService;
use App\Http\Controllers\Admin\Api\AdminApiController;

class FeedbackController extends AdminApiController
{
    /** @var FeedbacksService */
    private $feedbacksService;

    /** @var TransformerService */
    private $transformerService;

    /** @var ApiResponseService */
    private $apiResponseService;

    /**
     * FeedbackController constructor.
     * @param FeedbacksService $feedbacksService
     * @param TransformerService $transformerService
     * @param ApiResponseService $apiResponseService
     */
    public function __construct(
        FeedbacksService $feedbacksService,
        TransformerService $transformerService,
        ApiResponseService $apiResponseService
    )
    {
        parent::__construct();
        $this->feedbacksService = $feedbacksService;
        $this->transformerService = $transformerService;
        $this->apiResponseService = $apiResponseService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $feedbacks = $this->feedbacksService->allFeedbacks();
        $feedbacks = $this->transformerService->transformCollection($feedbacks);
        return $this->apiResponseService->success($feedbacks);
    }
}
