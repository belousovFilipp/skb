<?php

namespace App\Services\Feedbacks\Repositories;

use App\Feedback;
use Illuminate\Database\Eloquent\Collection;

class EloquentFeedbackRepository implements FeedbackRepositoryInterface
{
    public function all(): Collection
    {
        return Feedback::latest()->get();
    }
}
