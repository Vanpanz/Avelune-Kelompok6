<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function bookings(): View
    {
        return view('Admin.bookings');
    }

    public function availableRooms(): View
    {
        return view('Admin.available');
    }

    public function cancelledRooms(): View
    {
        return view('Admin.cancel');
    }
}
