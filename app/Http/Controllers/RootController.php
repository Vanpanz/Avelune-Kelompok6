<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RootController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function login(): View
    {
        return view('login');
    }
}
