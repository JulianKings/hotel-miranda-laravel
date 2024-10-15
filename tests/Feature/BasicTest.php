<?php

use App\Models\User;

test('test basic route', function () {
    $response = $this->get('/');
 
    $response->assertStatus(200);
});

test('ACTIVITIES: test disabled route', function () {
    $response = $this->get('/activity');
 
    $response->assertStatus(404);
});

test('ACTIVITIES: test unauthorized route', function () {
    $response = $this->get('/activities');
 
    $response->assertStatus(302);
});

test('ACTIVITIES: test authorized user', function () {
    $user = User::factory()->create();
 
    $response = $this->actingAs($user)
                     ->withSession(['banned' => false])
                     ->get('/activities');
 
    $response->assertStatus(200);
});