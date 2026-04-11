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
                  <livewire:post-row wire:key="{{$post->id}}" :$post></livewire:post-row>


              @endforeach

        </tbody>
    </table>
</div>
