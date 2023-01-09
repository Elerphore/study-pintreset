<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function cabinet() {
        $likesCount = UserPost::where('user_id', Auth::user()->id)->where('type', 'like')->count();
        $dislikesCount = UserPost::where('user_id', Auth::user()->id)->where('type', 'dislike')->count();
        $postsCount = Post::where('user_id', Auth::user()->id)->count();

        return view('cabinet.index')
                        ->with(compact('likesCount'))
                        ->with(compact('dislikesCount'))
                        ->with(compact('postsCount'));
    }
}
