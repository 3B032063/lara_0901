<?php

namespace App\Http\Controllers;


class AdminPostsController extends Controller
{
    use App\Models\Post;
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        $data = ['posts'=>$posts];
        return view('admin.posts.index', $data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        $data = [
            'post' => $post,
        ];

        return view('admin.posts.edit', $data);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
