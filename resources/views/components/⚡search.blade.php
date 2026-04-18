<?php

use Livewire\Component;

new class extends Component
{
    #[\Livewire\Attributes\Validate('required')]
    public $searchText = '';
    public $results = [];
    public $placeholder;

    public function updatedSearchText($value)
    {
        $this->validate();
        $this->reset('results');

        $searchTerm = "%{$value}%";

        $this->results = \App\Models\Article::where('title','LIKE',$searchTerm)->get();
    }

    public function clear()
    {
        $this->reset('results','searchText');

    }
};
?>

<div>
    <form>
        <div class="mt-2">
            <input
                type="text"
                wire:model.live.debounce="searchText"
                placeholder="{{$placeholder}}"
                class=" p-4 w-9/12 border rounded-md bg-gray-700 text-white"
            >
           <button class="text-white font-medium rounded-md p-4 disabled:bg-indigo-400"
           wire:click.prevent="clear()"
           {{empty($searchText) ? 'disabled' : ''}}>
               Clear
           </button>

        </div>
    </form>
<livewire:search-results :results="$results" :show="!empty($searchText)"></livewire:search-results>
</div>
