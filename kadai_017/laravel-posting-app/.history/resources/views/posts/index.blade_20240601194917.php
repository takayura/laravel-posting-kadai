@extends('layouts.app')

@section('title', '投稿一覧')

@section('content') 
@if (session('flash_message'))
  <p class="text-success">{{ session('flash_message') }}</p>
@endif

<div class="mb-2">
  <a href="{{ route('posts.create') }}" class="text-decoration-none">新規投稿</a>
</div>

<table class="table">

  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td>{{ $post->created_at }}</td>
      <td>
      <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">詳細</a>
      <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary">編集</a>
      <form action="{{ route('posts.destroy', $post) }}" method="post" class="d-inline">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger">削除</button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection