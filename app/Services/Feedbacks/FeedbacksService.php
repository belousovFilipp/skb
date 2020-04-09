<?php

namespace App\Services\Feedbacks;

use App\Feedback;
use App\Services\Feedbacks\Handlers\StoreFeedbackHandler;
use App\Services\Feedbacks\Repositories\FeedbackRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class FeedbacksService
{
    /** @var FeedbackRepositoryInterface */
    private $feedbackRepository;
    /**
     * @var StoreFeedbackHandler
     */
    private $storeFeedbackHandler;

    /**
     * FeedbacksService constructor.
     * @param FeedbackRepositoryInterface $feedbackRepository
     * @param StoreFeedbackHandler $storeFeedbackHandler
     */
    public function __construct(
        FeedbackRepositoryInterface $feedbackRepository,
        StoreFeedbackHandler $storeFeedbackHandler
    )
    {
        $this->feedbackRepository = $feedbackRepository;
        $this->storeFeedbackHandler = $storeFeedbackHandler;
    }

    /**
     * @return Collection
     */
    public function allFeedbacks(): Collection
    {
        return $this->feedbackRepository->all();
    }

    /**
     * @param $data
     * @return Feedback
     */
    public function storeFeedback(array $validatedData): Feedback
    {
        return $this->storeFeedbackHandler->handle($validatedData);
    }
}
