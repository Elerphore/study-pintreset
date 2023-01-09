<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(PostController::class)->group(function () {
    Route::get('/', function () { return redirect()->route('posts'); });

    Route::post('/post/like/{postId}/{type}', 'ratePost')->name('ratePost');

    Route::view('/post/create', 'addpost.index')->name('addpost_view');

    Route::post('/post/create', 'createPost')->name('createPost');
    Route::get('/post/posts', 'posts')->name('posts');
    Route::get('/post/likedPosts', 'likedPosts')->name('likedPosts');
    Route::get('/post/ownPosts', 'ownPosts')->name('ownPosts');

    Route::post('/removeRating/{postId}', 'removeRating')->name('removeRating');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user/cabinet', 'cabinet')->name('cabinet');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/adminpanel', 'adminPanel')->name('adminpanel');
    Route::post('/editpost/{postId}', 'postEdit')->name('postEdit');
    Route::delete('/removePost/{postId}', 'postRemove')->name('postRemove');
});
