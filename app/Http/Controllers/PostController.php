<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function ratePost($postId, $type) {

        $likedPost = UserPost::where('user_id', Auth::user()->id)->where('post_id', $postId)->first();

        if($likedPost == null) {
            $likedPost = new UserPost;
        }

        $likedPost->post_id = $postId;
        $likedPost->user_id = Auth()->user()->id;
        $likedPost->type = $type;

        $likedPost->save();

        return redirect()->route('posts');
    }

    public function createPost(Request $request) {
        $post = new Post;

        $post->title = $request->input('title');
        $post->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/image');
            $image->move($destinationPath, $fileName);

            $post->image = $fileName;
        }

        $post->user_id = Auth()->user()->id;

        $post->save();

        return redirect()->route('posts');
    }

    public function posts() {
        $posts = Post::all();
        return view('index')->with(compact('posts'));
    }

    public function likedPosts() {
        $posts = Auth::user()->userPosts()->get();

        return view('liked.index')->with(compact('posts'));
    }

    public function ownPosts() {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('cabinet.own-user-post')->with(compact('posts'));
    }

    public function removeRating($postId) {
        UserPost::where('user_id', Auth::user()->id)->where('post_id', $postId)->delete();

        return redirect()->route('likedPosts');
    }
}
