@extends('base')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>
<h3>{{ $post->content }}</h3>
<a href="{{ route('notes.index') }}">Back to index</a>
@endsection
