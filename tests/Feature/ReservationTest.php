<?php

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a guest can submit a reservation request', function () {
    $checkIn = now()->addDay()->toDateString();
    $checkOut = now()->addDays(3)->toDateString();

    $response = $this->post(route('reservation.store'), [
        'guest_name' => 'Avelune Guest',
        'contact' => 'guest@example.com',
        'check_in' => $checkIn,
        'check_out' => $checkOut,
        'guest_count' => 2,
        'notes' => 'A quiet room, please.',
    ]);

    $response->assertRedirect(route('reservation'))
        ->assertSessionHas('success');

    $this->assertDatabaseHas('reservations', [
        'guest_name' => 'Avelune Guest',
        'contact' => 'guest@example.com',
        'room_name' => 'Mistwood Suite',
        'check_in' => $checkIn,
        'check_out' => $checkOut,
        'guest_count' => 2,
        'notes' => 'A quiet room, please.',
        'status' => 'pending',
    ]);

    expect(Reservation::count())->toBe(1);
});

test('a reservation cannot be submitted with a checkout before check-in', function () {
    $this->from(route('reservation'))
        ->post(route('reservation.store'), [
            'guest_name' => 'Avelune Guest',
            'contact' => 'guest@example.com',
            'check_in' => now()->addDays(2)->toDateString(),
            'check_out' => now()->addDay()->toDateString(),
            'guest_count' => 1,
        ])
        ->assertRedirect(route('reservation'))
        ->assertSessionHasErrors('check_out');

    expect(Reservation::count())->toBe(0);
});
