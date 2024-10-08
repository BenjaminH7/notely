<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Blog::class, 'index'])->name('notes.index');
Route::get('/article/{slug}', [\App\Http\Controllers\Blog::class, 'show'])->name('notes.show');

Route::get('/new', [\App\Http\Controllers\Blog::class, 'create'])->name('notes.create');
Route::post('/new',[\App\Http\Controllers\Blog::class, 'store'])->name('notes.store');

Route::get('/article/{slug}/edit', [\App\Http\Controllers\Blog::class, 'edit'])->name('notes.edit');
Route::post('/article/{slug}/edit', [\App\Http\Controllers\Blog::class, 'update'])->name('notes.update');
