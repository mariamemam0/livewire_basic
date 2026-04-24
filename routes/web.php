<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/','article-index');
Route::livewire('/dashboard','dashboard');

Route::livewire('/dashboard/articles','article-list')->lazy();
Route::livewire('/dashboard/articles/create','create-article');
Route::livewire('/dashboard/articles/{article}/edit','edit-article');



Route::livewire('/articles/{article}','show-article');
Route::livewire('/counter','counter');
Route::livewire('/posts','show-posts');
Route::livewire('/posts/create','create-post');






