<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//やり取りするモデルを宣言する
use App\Models\Post;

class PostController extends Controller
{
    //一覧ページ
    public function index() {
        return view('posts.index');
    }
}

// php artisan make:controller PostController    をターミナルで実行後。↓
// class PostController extends Controllerとなっているので、Controllerというクラスを継承したPostControllerというクラスであることがわかります。