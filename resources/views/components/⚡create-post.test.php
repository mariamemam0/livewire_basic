<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('create-post')
        ->assertStatus(200);
});

it('title is required', function () {


    Livewire::test('create-post')
      ->set('title', '')
      ->call('save')
    ->assertHasErrors(['title'=>'required']);


});


