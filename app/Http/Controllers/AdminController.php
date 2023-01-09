<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminpanel() {
        $posts = Post::all();
        return view('admin.index')->with(compact('posts'));
    }

    public function postEdit(Request $request, $postId) {
        $post = Post::find($postId);

        if($request->input('title') != null) {
            $post->title = $request->input('title');
        }

        if($request->input('description') != null) {
            $post->description = $request->input('description');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/image');
            $image->move($destinationPath, $fileName);

            $post->image = $fileName;
        }

        $post->save();

        if(Auth::user()->role == 'admin') {
            return redirect()->route('adminpanel');
        } else {
            return redirect()->route('ownPosts');
        }
    }

    public function postRemove($postId) {
        Post::where('id', $postId)->delete();

        if(Auth::user()->role == 'admin') {
            return redirect()->route('adminpanel');
        } else {
            return redirect()->route('ownPosts');
        }
    }
}
