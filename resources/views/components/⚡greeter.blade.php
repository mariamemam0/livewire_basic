<?php

use Livewire\Component;

new class extends Component
{
    public $name = '';

    public function changeName()
    {

    }


};
?>
<div>
    <div>
        Hello, {{ $name }}!
    </div>
    <form
    wire:submit="changeName"
    >

    <div class="mt-2">
        <input
            id="newName"
            type="text"
            wire:model.live="name"
            class="block w-full p-4 border rounded-md bg-gray-700 text-white"
        >
    </div>

    <div class="mt-2">
        <button
            type="submit"
            class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
\        >
            Greet
        </button>
    </div>
    </form>
</div>
