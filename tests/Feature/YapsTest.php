<?php

use App\Models\User;

it('can create a yap', function () {
    $user = User::factory()->create();
    $this->actingAs($user)
        ->post(route('yaps.store'), [
            'content' => 'This is a new yap',
        ])
        ->assertRedirect()
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success', 'Yap created successfully.');
});

it('can delete an owned yap', function () {
    $user = User::factory()->create();
    $yap = $user->yaps()->create([
        'content' => 'This is a new yap',
    ]);

    $this->actingAs($user)
        ->delete(route('yaps.destroy', $yap))
        ->assertRedirect()
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success', 'Yap deleted successfully.');
});

it('cannot delete a yap owned by other user', function () {
    $user = User::factory()->create();
    $yap = User::factory()->create()->yaps()->create([
        'content' => 'This is a new yap',
    ]);

    $this->actingAs($user)
        ->delete(route('yaps.destroy', $yap))
        ->assertForbidden();
});
