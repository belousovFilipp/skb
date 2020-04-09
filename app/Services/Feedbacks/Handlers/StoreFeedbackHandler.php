<?php


namespace App\Services\Feedbacks\Handlers;


use App\Services\Feedbacks\Factories\FeedbackFactory;

class StoreFeedbackHandler
{
    /**
     * @var FeedbackFactory
     */
    private $feedbackFactory;

    /**
     * StoreFeedbackHandler constructor.
     * @param FeedbackFactory $feedbackFactory
     */
    public function __construct(FeedbackFactory $feedbackFactory)
    {
        $this->feedbackFactory = $feedbackFactory;
    }

    public function handle(array $data)
    {
        return $this->feedbackFactory->createFromArray($data);
    }
}
