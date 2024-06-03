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
      </div>
    </article>
  </main>

  <footer>
    <p>&coppy: 投稿アプリ All rights reserved.</p>
  </footer>
</body>
</html>