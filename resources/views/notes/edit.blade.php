@extends('base')

@section('title', 'Update')

@section('content')
  <h1>Create a note</h1>
  <form method="post" action="">
    <div class="mb-2">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title"  value="{{ old('title', $post->title) }}">
      @error("title")
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-2">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content">{{ old('content', $post->content) }}</textarea>
        @error("content")
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
     @csrf
    <button type="submit" class="btn btn-primary btn-sm">Save Note</button>
    <a href="{{ route('notes.index') }}" class="btn btn-secondary btn-sm">Cancel</a>

 </form>
@endsection
