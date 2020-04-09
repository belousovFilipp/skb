<?php

namespace App\Http\Controllers\Client\Pages;

use App\Services\Posts\PostsService;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Client\ClientController;

class HomeController extends ClientController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param PostsService $service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(PostsService $service)
    {
        View::share([
            'posts' => $service->allPosts(),
        ]);
        return view('client.pages.home.index');
    }
}
