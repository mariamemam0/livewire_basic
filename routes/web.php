<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/','article-index');
Route::livewire('/articles/{article}','show-article');
Route::livewire('/counter','counter');
Route::livewire('/posts','show-posts');
Route::livewire('/posts/create','create-post');






