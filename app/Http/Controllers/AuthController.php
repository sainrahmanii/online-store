<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
