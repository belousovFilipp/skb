<?php

namespace App\Services\Posts;

use App\Post;
use App\Services\Posts\Handlers\StorePostHandler;
use App\Services\Posts\Repositories\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class PostsService
{
    /** @var PostRepositoryInterface */
    private $repository;

    /** @var StorePostHandler */
    private $storePostHandler;

    /**
     * PostsService constructor.
     * @param PostRepositoryInterface $repository
     * @param StorePostHandler $storePostHandler
     */
    public function __construct(
        PostRepositoryInterface $repository,
        StorePostHandler $storePostHandler
    )
    {
        $this->repository = $repository;
        $this->storePostHandler = $storePostHandler;
    }

    /**
     * @return Collection
     */
    public function allPosts(): Collection
    {
        return $this->repository->allPosts();
    }

    /**
     * @param $slug
     * @return Post|null
     */
    public function findPost($slug): ?Post
    {
        return $this->repository->findBySlug($slug);
    }

    /**
     * @param array $validatedData
     * @return Post
     */
    public function storePost(array $validatedData): Post
    {
        return $this->storePostHandler->handle($validatedData);
    }
}
