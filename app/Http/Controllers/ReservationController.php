<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    public function store(StoreReservationRequest $request): RedirectResponse
    {
        Reservation::create([
            ...$request->validated(),
            'room_name' => 'Mistwood Suite',
        ]);

        return redirect()
            ->route('reservation')
            ->with('success', 'Your reservation request has been received.');
    }
}
