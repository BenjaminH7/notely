<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BlogFilterRequest;
use Illuminate\View\View;
use App\Http\Requests\CreatePostRequest;

class Blog extends Controller
{
    public function index (): View {
      $posts = Post::orderBy('created_at', 'desc')->paginate(10);
      return view("notes.index", ["posts" =>  $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('notes.show', ['post' => $post]);
    }
    public function create() {
      return view('notes.create');
    }

    public function store(CreatePostRequest $request) {
      $post =  Post::create($request->validated());
      return redirect()->route('notes.show',['slug' => $post->slug])->with('success', "Note created successfully 🎉");

    }

    public function edit($slug) {
      // show edit form
      $post = Post::where('slug', $slug)->firstOrFail();
      return view('notes.edit', ['post' => $post]);
    }

    public function update($slug, Post $post,CreatePostRequest $request) {
       $post = Post::where('slug', $slug)->firstOrFail();

       $post->update($request->validated());
       return redirect()->route('notes.show', ['slug'=>$post->slug])->with('success', "The note was updated successfully");
    }

}
