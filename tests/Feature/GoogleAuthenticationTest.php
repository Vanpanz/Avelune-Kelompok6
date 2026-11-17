<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User as SocialiteUser;

uses(RefreshDatabase::class);

test('it redirects to Google when OAuth is configured', function () {
    config([
        'services.google.client_id' => 'test-client-id',
        'services.google.client_secret' => 'test-client-secret',
    ]);

    Socialite::fake('google');

    $this->get(route('google.redirect'))
        ->assertRedirect('https://socialite.fake/google/authorize');
});

test('it creates and signs in a user with a verified Google email', function () {
    config([
        'services.google.client_id' => 'test-client-id',
        'services.google.client_secret' => 'test-client-secret',
    ]);

    Socialite::fake('google', SocialiteUser::fake([
        'email' => 'google@example.com',
        'email_verified' => true,
        'name' => 'Google User',
    ]));

    $this->get(route('google.callback'))
        ->assertRedirect(route('home'));

    $user = User::query()->where('email', 'google@example.com')->firstOrFail();

    $this->assertAuthenticatedAs($user);
    expect($user->name)->toBe('Google User')
        ->and($user->email_verified_at)->not->toBeNull();
});

test('it signs in an existing user with the same verified Google email', function () {
    $user = User::factory()->create([
        'email' => 'google@example.com',
        'name' => 'Existing User',
    ]);

    Socialite::fake('google', SocialiteUser::fake([
        'email' => 'google@example.com',
        'email_verified' => true,
    ]));

    $this->get(route('google.callback'))
        ->assertRedirect(route('home'));

    $this->assertAuthenticatedAs($user);
    $this->assertDatabaseCount('users', 1);
});

test('it rejects an unverified Google email', function () {
    Socialite::fake('google', SocialiteUser::fake([
        'email' => 'google@example.com',
        'email_verified' => false,
    ]));

    $this->get(route('google.callback'))
        ->assertRedirect(route('login'))
        ->assertSessionHasErrors('google');

    $this->assertGuest();
    $this->assertDatabaseCount('users', 0);
});

test('it shows a configuration error when Google OAuth credentials are missing', function () {
    config([
        'services.google.client_id' => null,
        'services.google.client_secret' => null,
    ]);

    $this->get(route('google.redirect'))
        ->assertRedirect(route('login'))
        ->assertSessionHasErrors('google');
});
