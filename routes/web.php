<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $posts = Post::all();
    return view('index')->with(compact('posts'));
})->name('home');

Auth::routes();

Route::controller(PostController::class)->group(function () {
    Route::post('/post/like/{postId}', 'likePost')->name('likePost');
    Route::post('/post/dislike/{postId}', 'dislikePost')->name('dislikePost');
    Route::post('/post/create', 'dislikePost')->name('createPost');
});

Route::controller(UserController::class)->group(function () {

});

Route::controller(AdminController::class)->group(function () {

});
