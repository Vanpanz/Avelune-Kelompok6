<?php

test('the login page is available', function () {
    $response = $this->get(route('login'));

    $response->assertSuccessful()
        ->assertSee('WELCOME BACK');
});
