<?php
// ルーティングを設定するコントローラーを宣言する
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// コントローラのアクションごとにルーティングを設定する
// 投稿の一覧ページ
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');