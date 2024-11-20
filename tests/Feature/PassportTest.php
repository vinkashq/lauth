<?php

use App\Models\User;
use Laravel\Passport\Passport;
 
test('can get user details', function () {
    $user = User::factory()->create();

    Passport::actingAs($user);
 
    $response = $this->get('/api/user');
 
    $response->assertStatus(200);
    $response->assertJson([
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
    ]);
});
