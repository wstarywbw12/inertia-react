<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/posts');
});

/**
 * route resource /posts
 */
Route::resource('/posts', \App\Http\Controllers\PostController::class);
