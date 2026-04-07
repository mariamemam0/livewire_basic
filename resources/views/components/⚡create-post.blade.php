<?php

use Livewire\Component;

new class extends Component
{

public $title ='';

public $content = '';

public function save()

{
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
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content" ></textarea>
        </label>

        <button type="submit">Save</button>
    </form>
</div>
