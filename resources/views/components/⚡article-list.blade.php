<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new #[\Livewire\Attributes\Title('Mange Articles'),\Livewire\Attributes\Layout('layouts::admin')]class extends Component
{
    #[Computed]
    public function articles()
    {
        return \App\Models\Article::all();
    }

    public function delete(\App\Models\Article $article)
    {
        $article->delete();
    }
};
?>

<div class="m-auto w-1/2 mb-4">
    <table>
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
        <tr>
            <th class="px-6 py-3">Title</th>
            <th class="px-6 py-3">Title</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($this->articles as $article)
            <tr wire:key="{{$article->id}}" class="border-b bg-gray-800 border-gray-700">
                <td class="px-6 py-3">{{$article->title}}</td>
                <td class="px-6 py-3">
                    <button class="text-gray-200 p-2 !bg-red-700 hover:!bg-red-900 rounded-sm"
                            wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure you want to delete this article?">
                        Delete
                    </button>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>
