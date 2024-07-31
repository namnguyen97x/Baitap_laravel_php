<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect('/posts');
}

    // truy vấn và hiển thị danh sách bài viết

public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}


public function show($id)
{
    $post = Post::find($id);
    return view('posts.show', compact('post'));
}

// chức năng chỉnh sửa

public function edit($id)
{
    $post = Post::find($id);
    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post = Post::find($id);
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect('/posts');
}

    // chức năng xóa

public function destroy($id)
{
    $post = Post::find($id);
    $post->delete();

    return redirect('/posts');
}

}