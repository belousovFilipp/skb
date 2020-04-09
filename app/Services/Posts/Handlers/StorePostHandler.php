<?php

namespace App\Services\Posts\Handlers;

use App\Post;
use App\Services\Posts\Factories\PostFactory;
use Illuminate\Support\Arr;

class StorePostHandler
{
    /** @var PostFactory */
    private $postFactory;

    /**\
     * StorePostHandler constructor.
     * @param PostFactory $postFactory
     */
    public function __construct(PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }

    public function handle(array $data)
    {
        $data = Arr::only($data, [
            'title',
            'slug',
            'desc_short',
            'desc_full',
            'status',
            'updated_at',
            'created_at',
        ]);
        $data['status'] = isset($data['status']) ? Post::STATUS_PUBLISHED : Post::STATUS_UNPUBLISHED;

        return $this->postFactory->createFromArray($data);
    }
}
