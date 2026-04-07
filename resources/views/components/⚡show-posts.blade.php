<?php

use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component
{
    #[Computed]
  public function posts()
    {
        return \App\Models\Post::all();
    }

  public function delete(\App\Models\Post $post)
  {
      $post->delete();
  }
};
?>

<div>
    <h2>Posts:</h2>

    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
              @foreach($this->posts as $post)
                  <tr wire:key="{{$post->id }}">
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

              @endforeach

        </tbody>
    </table>
</div>
