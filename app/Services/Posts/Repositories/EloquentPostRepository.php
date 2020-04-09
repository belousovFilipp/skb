<?php

namespace App\Services\Posts\Repositories;

use App\Post;
use Illuminate\Database\Eloquent\Collection;

class EloquentPostRepository implements PostRepositoryInterface
{
    public function allPosts(): Collection
    {
        return Post::published()->latest()->get();
    }

    public function findBySlug($slug): ?Post
    {
        return Post::where('slug', $slug)->first();
    }
}
