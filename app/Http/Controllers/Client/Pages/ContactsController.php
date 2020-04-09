<?php

namespace App\Http\Controllers\Client\Pages;

use App\Http\Controllers\Client\ClientController;

class ContactsController extends ClientController
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
        return view('client.pages.contacts.index');
    }
}
