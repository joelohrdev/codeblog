<?php

use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\SinglePost;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowPosts::class);
Route::get('/posts/{post:slug}', SinglePost::class)->name('posts.show');
