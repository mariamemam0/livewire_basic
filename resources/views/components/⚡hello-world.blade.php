<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>

   The current time is : {{time()}}
    <button wire:click="$refresh">Refresh</button>
</div>
