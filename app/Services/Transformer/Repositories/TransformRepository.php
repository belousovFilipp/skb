<?php

namespace App\Services\Transformer\Repositories;

use App\Post;
use App\Feedback;
use App\Services\Transformer\Transformers\PostTransformer;
use App\Services\Transformer\Transformers\DefaultTransformer;
use App\Services\Transformer\Transformers\FeedbackTransformer;

class TransformRepository implements TransformRepositoryInterface
{
    /**
     * @return array
     */
    public function getTransformers(): array
    {
        return [
            Post::class => PostTransformer::class,
            Feedback::class => FeedbackTransformer::class
        ];
    }

    public function getDefaultTransformer(): string
    {
        return DefaultTransformer::class;
    }
}
