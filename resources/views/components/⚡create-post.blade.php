<?php

use Livewire\Component;

new class extends Component
{
    //co-locating the validation rules with the properties they're concerned
    #[\Livewire\Attributes\Rule('required',message:'yo, add a title')]
public $title ='';
    #[\Livewire\Attributes\Rule('required')]

public $content = '';

public function save()

{

    $this->validate();

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
     Current Title:<span x-text="$wire.title.toUpperCase() + $wire.content"></span>


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
