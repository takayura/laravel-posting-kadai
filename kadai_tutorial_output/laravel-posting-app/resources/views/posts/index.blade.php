@extends('layouts.app')

@section('title', '投稿一覧')

@section('content') 
@if (session('flash_message'))
  <div class="alert alert-success mb-3">{{ session('flash_message') }}</div>
@endif

<div class="mb-3">
  <a href="{{ route('posts.create') }}" class="btn btn-outline-primary text-decoration-none">新規投稿</a>
</div>

@foreach($posts as $post)
  <div class="card mb-3">
    <div class="card-body">
    <h2 class="card-title fs-5">{{ $post->title }}</h2>
    <p class="card-text">{{ $post->content }}</p>

    <div class="d-flex justify-content-start">
      <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary me-1">詳細</a>
      <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary me-1">編集</a>

      <form action="{{ route('posts.destroy', $post) }}" method="post">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-outline-danger">削除</button>
      </form>
    </div>
    </div>
  </div>
@endforeach 
@endsection