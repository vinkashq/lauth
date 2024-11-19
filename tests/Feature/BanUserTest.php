<?php

use App\Models\User;

test('banned users cannot authenticate using the login screen', function () {
    $user = User::factory()->create();

    $user->ban();

    $response = $this->post('/login', [
        'email'    => $user->email,
        'password' => 'password',
    ]);

    $this->assertGuest();
});
