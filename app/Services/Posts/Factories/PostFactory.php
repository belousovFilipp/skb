<?php

namespace App\Services\Posts\Factories;

use App\Post;

class PostFactory
{
    public function createFromArray(array $data): Post
    {
        return Post::create($data);
    }
}
