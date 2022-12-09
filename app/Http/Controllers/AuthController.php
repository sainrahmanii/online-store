<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register()
    {
        return view('layouts.auth.register');
    }

    public function login()
    {
        return view('layouts.auth.login');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogle()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'nama_lengkap'      => $callback->getName(),
            'email'     => $callback->getEmail(),
            'url'    => $callback->getAvatar()
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        $gambar = Gambar::create(['avatar' => $data['url']], $data);
        Auth::login($user, $gambar, true);

        return redirect()->route('/');
    }
}
