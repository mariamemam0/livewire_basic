<?php
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Counter')] class extends Component
{
    public $count= 1;

    public function increment($by)
    {
        $this->count= $this->count + $by;
    }

};
?>

<div>
    Count : {{$count}}
    <button wire:mouseenter="increment(2)">+</button>
</div>
