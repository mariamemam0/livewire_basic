<?php
use Livewire\Attributes\Title;
use Livewire\Component;
new #[Title('Todos')] class extends Component
{
    public $todo = '';
    public $todos= ['who cares'];

    public function add()
    {
       $this->todos[]=$this->todo;
       $this->reset('todo');
    }




// use this lifecycel hook method to do some validation
    public function updated($property,$value)
    {
        $this->$property = strtoupper($value);
        $this->validation();
    }


//    public function mount()
//    {
//        $this->todos = [
//            'Take out trash',
//            'Do dishes',
//        ];
//
//        $this->todo = 'Type todo.....';
//     }

};
?>

<div>
    <form wire:submit="add">
    <input type="text" wire:model="todo">
    <button type="submit">Add</button>
        <span> Current todo:{{$todo}}</span>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
