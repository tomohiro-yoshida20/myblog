@extends('layouts.default')

@section('title', 'BlogPosts')

@section('content')
  <h1>
    BLog Posts
    <a href="{{ url('/posts/create/') }}" class="header-menu">New Post</a>
  </h1>

  <ul>

    @forelse ($posts as $post)
      <li>
        <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
        <a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a>
        <a href="#" class="del" data-id="{{ $post->id }}">[×]</a>
        <form action="{{ url('/posts', $post->id) }}" method="post" id="form_{{ $post->id }}">
        @csrf
        {{ method_field('delete')}}</form>
      </li>
    @empty
      <li>No Posts Yet</li>
    @endforelse
  </ul>
  <script>
    'use strict'
    {
      const cmds = document.querySelectorAll('.del');
      for (let i=0;i<cmds.length; i++) {
        cmds[i].addEventListener('click', (e) => {
          e.preventDefault();
          if (confirm('are you sure?')) {
            document.getElementById('form_' + this.dataset.id).submit();
          }
        });
      }
    }
  </script>
@endsection