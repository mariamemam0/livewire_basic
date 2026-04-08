<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('create-post')
        ->assertStatus(200);
});

it('can create new post', function () {

    $post = \App\Models\Post::whereTitle('Some Title')->first();
    $this->assertNull($post);
    Livewire::test('create-post')
      ->set('title', 'Some Title')
    ->set('content', 'Some Content')
    ->call('save');

    $post = \App\Models\Post::whereTitle('Some Title')->first();
    $this->assertNotNull($post);
    $this->assertEquals('Some Content', $post->content);
});


