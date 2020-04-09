<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//---CLIENT---
Route::group(['namespace' => 'Client'], function () {
    //PAGES
    Route::group(['namespace' => 'Pages'], function () {
        //HOME
        Route::get('/', 'HomeController')
            ->name('home');
        //HOME
        Route::get('/about', 'AboutController')
            ->name('about');
        //CONTACTS
        Route::get('/contacts', 'ContactsController')
            ->name('contacts');
    });

    //CMS
    Route::group(['namespace' => 'Cms'], function () {
        //POSTS
        Route::resource('posts', 'Posts\PostController')
            ->only(['show', 'create', 'store']);

        //FEEDBACKS
        Route::resource('feedbacks', 'Feedbacks\FeedbackController')
            ->only(['store']);
    });
});

//---ADMIN---
Route::group(['namespace' => 'Admin'], function () {
    //HOME
    Route::get('/admins', 'Pages\HomeController')
        ->name('admin.home');

    Route::name('admins.')->group(function () {
        //FEEDBACKS
        Route::resource('/feedbacks', 'Cms\FeedbackController')
            ->only(['index']);
    });
});



