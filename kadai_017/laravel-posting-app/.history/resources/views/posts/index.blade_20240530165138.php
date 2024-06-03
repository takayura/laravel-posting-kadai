<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿一覧</title>
</head>

<body>
  <header>
    <nav>
      <div>
        <!-- route()ヘルパーを使ってリンクを作成しよう -->
        <a href="{{ route('posts.index') }}">投稿アプリ</a>
      </div>
    </nav>
  </header>

  <main>
    <article>
      <div>
        <h1>投稿一覧</h1>
        <!-- フラッシュメッセージの表示には条件分岐のif文を使い、
        「セッションにフラッシュメッセージのデータが存在すれば」
        フラッシュメッセージを表示 -->
        @if (session('flash_message'))
      <p>{{ session('flash_message') }}</p>
    @endif

        <div>
          <a href="{{ route('posts.create') }}">新規投稿</a>
        </div>
      </div>
    </article>
  </main>

  <footer>
    <p>&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>

</html>