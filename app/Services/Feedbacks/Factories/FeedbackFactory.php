<?php


namespace App\Services\Feedbacks\Factories;


use App\Feedback;

class FeedbackFactory
{
    public function createFromArray(array $data): Feedback
    {
        return Feedback::create($data);
    }
}
