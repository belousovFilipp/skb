<?php

namespace App\Http\Controllers\Client\Api\Feedbacks;

use App\Services\Feedbacks\FeedbacksService;
use App\Services\ApiResponse\ApiResponseService;
use App\Services\Transformer\TransformerService;
use App\Http\Requests\Feedbacks\StoreFeedbackRequest;
use App\Http\Controllers\Client\Api\ClientApiController;

class FeedbackController extends ClientApiController
{
    /** @var FeedbacksService */
    private $feedbacksService;

    /** @var ApiResponseService */
    private $apiResponseService;

    /** @var TransformerService */
    private $transformerService;

    public function __construct(
        FeedbacksService $feedbacksService,
        TransformerService $transformerService,
        ApiResponseService $apiResponseService
    )
    {
        parent::__construct();
        $this->feedbacksService = $feedbacksService;
        $this->apiResponseService = $apiResponseService;
        $this->transformerService = $transformerService;
    }

    /**
     * @param StoreFeedbackRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = $this->feedbacksService->storeFeedback($request->getFormData());
        $feedback = $this->transformerService->transformModel($feedback);
        return $this->apiResponseService->successCreated($feedback);
    }
}
