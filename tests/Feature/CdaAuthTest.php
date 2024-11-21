<?php

use App\Models\User;
use Vinkas\Cda\Server\Client;

function getPayload()
{
    return base64_encode(http_build_query([
        'nonce' => 'NONCE',
    ]));
}

function getSignature($secret)
{
    return hash_hmac('sha256', getPayload(), $secret);
}

function getAuthUrl($client)
{
    return '/cda/'.$client->key.'?payload='.getPayload().'&signature='.getSignature($client->secret);
}

function getResponsePayload($user)
{
    return base64_encode(http_build_query(
        [
            'id'       => $user->id,
            'email'    => $user->email,
            'username' => $user->username,
            'name'     => $user->name,
            'nonce'    => 'NONCE',
        ]
    ));
}

function getResponsePayloadSignature($user, $client)
{
    return hash_hmac('sha256', getResponsePayload($user), $client->secret);
}

test('redirects to login route', function () {
    $client = Client::factory()->create();

    $response = $this->get(getAuthUrl($client))
        ->assertStatus(302);

    $response->assertRedirect('/login');
});

test('receives user data', function () {
    $client = Client::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->get(getAuthUrl($client))
        ->assertStatus(302);

    $url = $response->getTargetUrl();
    parse_str(parse_url($url, PHP_URL_QUERY), $query);

    expect($query['payload'])->toBe(getResponsePayload($user));
    expect($query['signature'])->toBe(getResponsePayloadSignature($user, $client));
});
