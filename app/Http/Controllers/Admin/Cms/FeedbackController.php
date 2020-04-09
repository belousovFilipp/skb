<?php

namespace App\Http\Controllers\Admin\Cms;

use Illuminate\Support\Facades\View;
use App\Services\Feedbacks\FeedbacksService;
use App\Http\Controllers\Admin\AdminController;

class FeedbackController extends AdminController
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        View::share([
            'feedbacks' => $this->feedbacksService->allFeedbacks(),
        ]);
        return view('admin.cms.feedbacks.index');
    }
}
