<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ApiResponse\Responses\JsonApiResponse;
use App\Services\Posts\Repositories\EloquentPostRepository;
use App\Services\Posts\Repositories\PostRepositoryInterface;
use App\Services\ApiResponse\Responses\ApiResponseInterface;
use App\Services\Feedbacks\Repositories\EloquentFeedbackRepository;
use App\Services\Feedbacks\Repositories\FeedbackRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ApiResponseInterface::class, JsonApiResponse::class);
        $this->app->bind(PostRepositoryInterface::class, EloquentPostRepository::class);
        $this->app->bind(FeedbackRepositoryInterface::class, EloquentFeedbackRepository::class);
    }
}
