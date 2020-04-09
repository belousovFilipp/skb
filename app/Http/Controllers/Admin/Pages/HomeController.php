<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminController;

class HomeController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('admin.pages.home.index');
    }
}
