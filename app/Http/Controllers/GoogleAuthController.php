<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        if (! filled(config('services.google.client_id')) || ! filled(config('services.google.client_secret'))) {
            return redirect()->route('login')->withErrors([
                'google' => 'Google login belum dikonfigurasi. Isi GOOGLE_CLIENT_ID dan GOOGLE_CLIENT_SECRET di file .env.',
            ]);
        }

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request): RedirectResponse
    {
        if ($request->filled('error')) {
            return redirect()->route('login')->withErrors([
                'google' => 'Login Google dibatalkan atau gagal. Silakan coba lagi.',
            ]);
        }

        $googleUser = Socialite::driver('google')->user();
        $email = $googleUser->getEmail();

        if (! is_string($email) || ! filter_var($email, FILTER_VALIDATE_EMAIL) || ($googleUser->user['email_verified'] ?? false) !== true) {
            return redirect()->route('login')->withErrors([
                'google' => 'Google harus memberikan alamat email yang valid dan terverifikasi untuk login.',
            ]);
        }

        $user = User::query()->firstOrCreate(
            ['email' => $email],
            [
                'name' => $googleUser->getName() ?: $email,
                'password' => Str::random(40),
            ],
        );

        if ($user->email_verified_at === null) {
            $user->forceFill(['email_verified_at' => now()])->save();
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('home');
    }
}
