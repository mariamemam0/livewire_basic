<?php

use Livewire\Component;

new class extends Component
{

     public $post;

public function mount($post)
{
    $this->post = $post;
}
};
?>

<div>
        <td>{{$post->title}}</td>
        <td>{{str($post->content)->limit(45)}}</td>
        <td>
            <button
                type="button"
                wire:click="delete({{ $post->id }})"
                wire:confirm="Are you sure you want to delete this post"
            >
                Delete
            </button>
        </td>
    </tr>
</div>
