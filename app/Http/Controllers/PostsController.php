<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsRequest;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts', Posts::orderBy('created_at', 'desc')->paginate());
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostsRequest $request)
    {
        Posts::create($request->validated());

        return redirect()->route('posts.index');
    }

    public function show(Posts $post)
    {
        return view('posts.show')->with('post', $post);
    }

    public function update(PostsRequest $request, Posts $posts)
    {
        $posts->update($request->validated());

        return $posts;
    }

    public function destroy(Posts $posts)
    {
        $posts->delete();

        return response()->json();
    }
}
