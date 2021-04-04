@extends('layouts.default')

@section('title', $post->title)

@section('content')
  <h1>
    {{ $post->title }}
    <a href="{{ url('/') }}" class="header-menu">Back</a>
  </h1>
  <p>{!! nl2br(e($post->body)) !!}</p>
@endsection
