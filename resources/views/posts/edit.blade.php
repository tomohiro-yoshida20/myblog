@extends('layouts.default')

@section('title', 'Edit Post')

@section('content')
  <h1>
    Edit Post
    <a href="{{ url('/') }}" class="header-menu">Back</a>  
  </h1>
  <form action="{{ url('/posts', $post->id) }}" method="post">
    @csrf
    {{ method_field('patch') }}
    <p>
      <input type="text" name="title" p laceholder="enter title" value="{{ old('title', $post->title) }}">
      @if ($errors->has('title'))
      <span class="error">{{ $errors->first('title') }}</span>
      @endif
    </p>
    <p>
      <textarea name="body" placeholder="enter body">
        {{ old('body', $post->body) }}
      </textarea>
      @if ($errors->has('body'))
      <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </p>
    <p>
      <input type="submit" value="Update">
    </p>
  </form>
@endsection
