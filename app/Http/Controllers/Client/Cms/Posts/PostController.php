<?php

namespace App\Http\Controllers\Client\Cms\Posts;

use Illuminate\Support\Facades\View;
use App\Services\Posts\PostsService;
use App\Http\Requests\Posts\StorePostRequest;
use App\Http\Controllers\Client\ClientController;
use App\Services\EntityControl\EntityControlService;

class PostController extends ClientController
{
    /** @var PostsService */
    private $postsService;

    /** @var EntityControlService */
    private $entityControlService;

    /**
     * PostController constructor.
     * @param PostsService $postsService
     * @param EntityControlService $entityControlService
     */
    public function __construct(
        PostsService $postsService,
        EntityControlService $entityControlService
    )
    {
        parent::__construct();
        $this->postsService = $postsService;
        $this->entityControlService = $entityControlService;
    }

    /**
     * @param $slugPost
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slugPost)
    {
        $post = $this->postsService->findPost($slugPost);
        $this->entityControlService->checkModel($post);
        View::share([
            'post' => $post,
        ]);
        return view('client.cms.posts.show');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('client.cms.posts.create');
    }

    /**
     * @param StorePostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePostRequest $request)
    {
        $this->postsService->storePost($request->getFormData());

        return response()->redirectToRoute('home');
    }
}
