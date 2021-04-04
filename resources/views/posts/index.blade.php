@extends('layouts.default')

@section('title', 'BlogPosts')

@section('content')
  <h1>
    BLog Posts
    <a href="{{ url('/posts/create/') }}" class="header-menu">New Post</a>
  </h1>

  <ul>

    @forelse ($posts as $post)
      <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
    @empty
      <li>No Posts Yet</li>
    @endforelse
  </ul>
@endsection