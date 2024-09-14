@extends('base')

@section('title', $post->title)

@section('content')
<div class="d-flex justify-content-between align-items-center">
  <h1>{{ $post->title }}</h1>
  <a href="{{ route('notes.edit', ['slug'=>$post->slug]) }}" class="btn btn-primary btn-sm">Edit</a>
</div>
<h3>{{ $post->content }}</h3>
<p class="bold">{{ \Carbon\Carbon::create($post->created_at)->diffForHumans() }}</p>
<a href="{{ route('notes.index') }}">Back to index</a>
@endsection
