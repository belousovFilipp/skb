<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function () {
    //CLIENT
    Route::group(['namespace' => 'Client\Api'], function () {
        //POSTS
        Route::apiResource('posts', 'Posts\PostController')
            ->only(['index', 'show', 'store']);
        //FEEDBACKS
        Route::apiResource('feedbacks', 'Feedbacks\FeedbackController')
            ->only(['store']);
    });

    //ADMIN
    Route::group(['namespace' => 'Admin\Api'], function () {
        //FEEDBACKS
        Route::apiResource('admins/feedbacks', 'Feedbacks\FeedbackController')
            ->only(['index']);
    });
});
