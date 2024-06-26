<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿編集</title>
  @vite(['resources/js/app.js'])
</head>

<body style="padding: 60px 0;">
  <header>
  <nav class="navbar navbar-light bg-light fixed-top" style="height: 60px;">            
  <div class="container">                               
  <a href="{{ route('posts.index') }}" class="navbar-brand">投稿アプリ</a>                     
      </div>
    </nav>
  </header>

  <main>
    <article>
    <div class="container">                   
        <h1>投稿編集</h1>

        @if ($errors->any())
      <div>
        <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
        </ul>
      </div>
    @endif  
      <div>
          <a href="{{ route('posts.index') }}">&lt; 戻る</a>
        </div>

        <form action="{{ route('posts.update', $post) }}" method="post">
          @csrf
          @method('patch')
          <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
          </div>
          <div>
            <label for="content">本文</label>
            <textarea name="content">{{ old('content', $post->content) }}</textarea>
          </div>
          <button type="submit">更新</button>
        </form>
      </div>
    </article>
  </main>

  <footer>
    <p>&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>

</html>