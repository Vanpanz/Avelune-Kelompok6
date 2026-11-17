<?php

test('the sign up page displays the account fields', function () {
    $this->get(route('register'))
        ->assertSuccessful()
        ->assertSee('CREATE ACCOUNT')
        ->assertSee('FULL NAME')
        ->assertSee('EMAIL ADDRESS')
        ->assertSee('CONFIRM PASSWORD')
        ->assertSee('Continue with Google')
        ->assertDontSee('>G</span>', false);
});

test('the login page links to the sign up page', function () {
    $this->get(route('login'))
        ->assertSuccessful()
        ->assertSee(route('register'))
        ->assertSee('Sign up')
        ->assertSee('Continue with Google')
        ->assertDontSee('>G</span>', false);
});
