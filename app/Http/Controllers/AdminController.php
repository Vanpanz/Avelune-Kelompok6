<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function profile(): View
    {
        return view('Admin.profile', [
            'registeredUsers' => User::count(),
        ]);
    }

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
