<?php

use App\Livewire\AddPost;
use App\Livewire\Post;
use App\Livewire\PostIndex;
use Illuminate\Support\Facades\Route;

Route::livewire('/post', Post::class);

Route::livewire('/posts', PostIndex::class)->name('post.index');

Route::livewire('/post/add', AddPost::class)->name('add.post');
