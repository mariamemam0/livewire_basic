<?php

use Livewire\Component;

new class extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article= \App\Models\Article::findOrFail($id);
    }

};

?>

<div>
    <h2 class="text-2xl text-white">{{$article->title}}</h2>
    <div class="mt-4">
      {{$article->content}}
    </div>
</div>
