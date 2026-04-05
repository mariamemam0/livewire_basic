<?php

use Livewire\Component;

new class extends Component
{
    public $todo = '';
    public $todos= [
        'Take out trash',
        'Do dishes',
    ];

    public function add()
    {
       $this->todos[]=$this->todo;
       $this->reset('todo');
    }

};
?>

<div>
    <form wire:submit="add">
    <input type="text" wire:model.live="todo">
    <button type="submit">Add</button>
        <span> Current todo:{{$todo}}</span>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
