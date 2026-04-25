<?php

use Livewire\Component;
use App\Models\Article;
new class extends Component
{
#[\Livewire\Attributes\Url(as: 'q' , except:'')]
    public $searchText = '';
    public $placeholder;


#[\Livewire\Attributes\On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText');
        unset($this->results);

    }

    protected function queryString()
    {
        return
       [ 'searchText' => [
            'as' => 'q',
            'history' => true,
            'except' => '',
       ]
    ];
    }

    #[\Livewire\Attributes\Computed]
    public function results()
    {
        return Article::where('title','LIKE',"%{$this->searchText}%")->get();
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
                class=" p-4 w-full border rounded-md bg-gray-700 text-white"
            >


        </div>
    </form>
<livewire:search-results :results="$this->results" :show="!empty($searchText)"></livewire:search-results>
</div>
