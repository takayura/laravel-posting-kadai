<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿一覧</title>
  @vite(['resources/js/app.js'])
</head>

<body style="padding: 60px 0;">
  <header>
  <nav class="navbar navbar-light bg-light fixed-top" style="height: 60px;">            
  <div class="container">                               
        <!-- route()ヘルパーを使ってリンクを作成しよう -->
        <a href="{{ route('posts.index') }}" class="navbar-brand">投稿アプリ</a>                     
      </div>
    </nav>
  </header>

  <main>
    <article>
    <div class="container">                                    
    <h1 class="fs-2 my-3">投稿一覧</h1>

        @if (session('flash_message'))
        <p class="text-success">{{ session('flash_message') }}</p>
    @endif

    <div class="mb-2">
    <a href="{{ route('posts.create') }}" class="text-decoration-none">新規投稿</a>                                   
        </div>

        @foreach($posts as $post)
        <div class="card mb-3">
        <div class="card-body">
        <h2 class="card-title fs-5">{{ $post->title }}</h2>
        <p class="card-text">{{ $post->content }}</p>    

        <div class="d-flex">
        <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary d-block me-1">詳細</a>
          <a href="{{ route('posts.edit', $post) }}">編集</a>

          <form action="{{ route('posts.destroy', $post) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit">削除</button>
          </form>
        </div>
        </div>
      </div>
    @endforeach  
      </div>
    </article>
  </main>


  <footer>
    <p>&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>

</html>