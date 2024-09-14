@extends('base')

@section('title', 'Your Notes')

@section('content')
<div class="d-flex justify-content-between align-items-center">
  <h1 class="my-3">My Notes</h1>
 <a href="{{ route('notes.create') }}" class="btn btn-primary btn-sm">Create a new note</a></div>
@foreach ($posts as $post)
<article>
  <p><a href="{{route('notes.show', ['slug' => $post->slug])}}"> {{$post->title}}</a></p>

</article>
@endforeach
{{ $posts->links() }}
@endsection
