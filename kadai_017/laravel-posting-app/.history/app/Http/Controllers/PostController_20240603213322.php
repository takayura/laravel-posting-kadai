<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// やりとりするモデルを宣言する
use App\Models\Post;

class PostController extends Controller
{
    // 一覧ページ
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // 作成ページ
    public function create()
    {
        return view('posts.create');
    }

    // 作成機能
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:40', // タイトルのバリデーションルールを追加
            'content' => 'required|max:200', // 本文のバリデーションルールを追加
        ]);

        $post = new Post($validatedData);
        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '投稿が完了しました。');
    }

    // 詳細ページ
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // 更新ページ
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 更新機能
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:40', // タイトルのバリデーションルールを追加
            'content' => 'required|max:200', // 本文のバリデーションルールを追加
        ]);

        $post->fill($validatedData)->save();

        return redirect()->route('posts.show', $post)->with('flash_message', '投稿を編集しました。');
    }

    // 削除機能
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('flash_message', '投稿を削除しました。');
    }

}


// php artisan make:controller PostController    をターミナルで実行後。↓
// class PostController extends Controllerとなっているので、Controllerというクラスを継承したPostControllerというクラスであることがわかります。