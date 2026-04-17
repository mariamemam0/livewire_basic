<?php

use Livewire\Component;

new class extends Component
{
    public \App\Models\Article $article;

    public function mount(\App\Models\Article $article)
    {
        $this->article= $article;
    }

};

?>

<div>
    <h2 class="text-2xl text-white">{{$article->title}}</h2>
    <div class="mt-4">
      {{$article->content}}
    </div>
</div>
