<?php

namespace App\Http\Controllers\Client\Api\Posts;

use App\Services\Posts\PostsService;
use App\Http\Requests\Posts\StorePostRequest;
use App\Services\ApiResponse\ApiResponseService;
use App\Services\Transformer\TransformerService;
use App\Services\EntityControl\EntityControlService;
use App\Http\Controllers\Client\Api\ClientApiController;

class PostController extends ClientApiController
{
    /** @var PostsService */
    private $postsService;

    /** @var TransformerService */
    private $transformerService;

    /** @var ApiResponseService */
    private $apiResponseService;

    /** @var EntityControlService */
    private $entityControlService;

    /**
     * PostController constructor.
     * @param PostsService $postsService
     * @param ApiResponseService $apiResponseService
     * @param TransformerService $transformerService
     * @param EntityControlService $entityControlService
     */
    public function __construct(
        PostsService $postsService,
        ApiResponseService $apiResponseService,
        TransformerService $transformerService,
        EntityControlService $entityControlService
    )
    {
        parent::__construct();
        $this->postsService = $postsService;
        $this->apiResponseService = $apiResponseService;
        $this->transformerService = $transformerService;
        $this->entityControlService = $entityControlService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $posts = $this->postsService->allPosts();
        $posts = $this->transformerService->transformCollection($posts);
        return $this->apiResponseService->success($posts);
    }

    /**
     * @param StorePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePostRequest $request)
    {
        $post = $this->postsService->storePost($request->getFormData());
        $this->entityControlService->checkModel($post);
        $post = $this->transformerService->transformModel($post);
        return $this->apiResponseService->successCreated($post);
    }

    /**
     * @param $slug
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($slugPost)
    {
        $post = $this->postsService->findPost($slugPost);
        $this->entityControlService->checkModel($post);
        $post = $this->transformerService->transformModel($post);
        return $this->apiResponseService->success($post);
    }
}
