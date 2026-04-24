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
    <div class="mb-3 flex justifiy-between item-center">
        <a
            href="/dashboard/articles/create"
            class="text-gray-200 p-2 bg-indigo-700 hover:bg-indigo-900 rounded-sm"
            wire:navigate
        >
            Create Article
        </a>
        <livewire:published-count lazy></livewire:published-count>
    </div>
    <table class="w-full">
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
        <tr>
            <th class="px-6 py-3">Title</th>
            <th class="px-6 py-3"></th>
            <th class="px-6 py-3"></th>


        </tr>
        </thead>
        <tbody>
        @foreach ($this->articles as $article)
            <tr wire:key="{{$article->id}}" class="border-b bg-gray-800 border-gray-700">
                <td class="px-6 py-3">{{$article->title}}</td>
                <td class="px-6 py-3">{{str($article->content)->limit(45)}}</td>

                <td class="px-6 py-3">
                    <a class="text-gray-200 p-2 "
                    href="/dashboard/articles/{{$article->id}}/edit"
                    wire:navigate
                    >
                        Edit
                    </a>
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
