<?php

namespace App\Services\Posts\Repositories;

use App\Post;
use Illuminate\Database\Eloquent\Collection;

interface PostRepositoryInterface
{
    public function allPosts(): Collection;

    public function findBySlug($slug): ?Post;
}
