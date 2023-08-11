<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }
    public function text($id) {
        $post = Post::findOrfail($id);

        return view('posts.text')->with(['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title =$request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('index.posts');
    }
}
