<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts', Post::orderBy('created_at', 'desc')->paginate());
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostsRequest $request)
    {
        Post::create($request->validated());

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }
}
