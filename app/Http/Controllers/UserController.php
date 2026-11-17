<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function home(): View
    {
        return view('User.home');
    }

    public function accommodation(): View
    {
        return view('User.accommodation');
    }

    public function amenities(): View
    {
        return view('User.amenities');
    }

    public function about(): View
    {
        return view('User.about');
    }

    public function reservation(): View
    {
        return view('User.reservation');
    }

    public function profiles(): View
    {
        return view('User.profile');
    }

    public function amenitiesDetail(string $name): View
    {
        return view('User.amenities-detail', ['name' => $name]);
    }

    public function profileDetail(string $id): View
    {
        return view('User.reservation-detail', ['id' => $id]);
    }
}
