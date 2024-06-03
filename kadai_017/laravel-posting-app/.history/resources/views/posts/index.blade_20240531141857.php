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

      @foreach($posts as $post)
      <div>
      <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <!-- route()ヘルパーを使えば、
      各投稿の詳細ページへのリンクを作成できるということ -->
      </div>
      <a href="{{ route('posts.show', $post) }}">詳細</a>
      <a href="{{ route('posts.edit', $post) }}">編集</a>

      <form action="{{ route('posts.destroy', $post) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">削除</button>
    
    </form>
      </div>
      <!-- ルーティングのURLにおいて'/posts/{post}'のようにモデル名（小文字、単数形）を波括弧{}で囲むことで、
      このようにモデルのインスタンスを受け取れるようになります。そして、
      受け取ったインスタンスのidを自動的に取得し、{post}の部分に入れてくれます。 -->
    @endforeach
    </article>
  </main>

  <footer>
    <p>&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>

</html>