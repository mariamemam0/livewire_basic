<?php

use Livewire\Component;

new class extends Component
{

public $title ='';

public $content = '';

public function save()

{
    $this->validate([
        'title'=> 'required',
        'content'=> 'required',
    ]);

        \App\Models\Post::create([
            'title'=>$this->title,
            'content'=>$this->content,
        ]);
        $this->redirect('/posts');
    }
};
?>

<div>
    <h2>New Post:</h2>

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title" >
            @error('title') <em>{{$message}}</em>@enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content" ></textarea>
            @error('content') <em>{{$message}}</em>@enderror

        </label>

        <button type="submit">Save</button>
    </form>
</div>
