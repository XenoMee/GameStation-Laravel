<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|string',
            'description' => 'required|string',
        ]);

        $post = new Post();
        $post->image_url = $request->input('image_url');
        $post->description = $request->input('description');

        $post->save();

        return response()->json(['message' => 'Post created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Post::find($id)) return response()->json(['message' => 'Post not found'], 404);

        return view('posts.show', ['post' => Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Post::find($id)) return response()->json(['message' => 'Post not found'], 404);

        return view('posts.edit', ['post' => Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        if (!$post) return response()->json(['message' => 'Post not found'], 404);

        $request->validate([
            'image_url' => 'required|string',
            'description' => 'required|string',
        ]);

        $post->image_url = $request->input('image_url');
        $post->description = $request->input('description');

        $post->save();

        return response()->json(['message' => 'Post updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Post::find($id)) return response()->json(['message' => 'Post not found'], 404);

        Post::find($id)->delete();


        return response()->json(['message' => 'Post deleted successfully'], 201);
    }
}
