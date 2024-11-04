<?php

test('redirect to the homepage URL', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
});
