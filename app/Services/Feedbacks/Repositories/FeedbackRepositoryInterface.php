<?php


namespace App\Services\Feedbacks\Repositories;


use Illuminate\Database\Eloquent\Collection;

interface FeedbackRepositoryInterface
{
    public function all(): Collection;
}
