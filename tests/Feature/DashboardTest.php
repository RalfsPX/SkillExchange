<?php

use App\Models\User;

test('guests see the landing page', function () {
    $response = $this->get(route('home'));
    $response->assertOk();
    $response->assertViewIs('welcome');
});

test('authenticated users can visit the home page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('home'));
    $response->assertOk();
});
