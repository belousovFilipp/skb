<?php

namespace App\Http\Controllers\Client\Cms\Feedbacks;

use App\Services\Feedbacks\FeedbacksService;
use App\Http\Controllers\Client\ClientController;
use App\Http\Requests\Feedbacks\StoreFeedbackRequest;

class FeedbackController extends ClientController
{
    /** @var FeedbacksService */
    private $feedbacksService;

    /**
     * FeedbackController constructor.
     * @param FeedbacksService $feedbacksService
     */
    public function __construct(FeedbacksService $feedbacksService)
    {
        parent::__construct();
        $this->feedbacksService = $feedbacksService;
    }

    /**
     * @param StoreFeedbackRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFeedbackRequest $request)
    {
        $this->feedbacksService->storeFeedback($request->getFormData());
        return response()->redirectToRoute('contacts');
    }
}
