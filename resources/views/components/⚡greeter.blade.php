<?php

use Livewire\Component;

new class extends Component
{
    public $name = '';
    public $greeting = '';
    public $greetingMessage = '';





    public function changeGreeting()
    {

        $this->reset('greetingMessage');
        $this->validate([
            'name'=>'required|min:2',
        ]);


            $this->greetingMessage = "{$this->greeting}, {$this->name}";
    }


};
?>
<div>

    <form
    wire:submit="changeGreeting"
    >

    <div class="mt-2">
        <select
            id="newName"
            type="text"
            wire:model.fill="greeting"
            class=" p-4 border rounded-md bg-gray-700 text-white"
        >
            <option value="Hello">Hello</option>
            <option value="Hi">Hi</option>
            <option value="Hey">Hey</option>
            <option value="Howdy">Howdy</option>



        </select>
        <input
            type="text"
            wire:model="name"
            class=" p-4 border rounded-md bg-gray-700 text-white"
        >
    </div>
        <div>
            @error('name')
            {{$message}}
            @enderror
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
    @if($greetingMessage ==! '')
        <div class="mt-5">
            {{$greetingMessage}}
        </div>
        @endif
</div>
