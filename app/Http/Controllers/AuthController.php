<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Repositories\User\UserRepositoryImplement;

class AuthController extends Controller
{
    private $mainService;

    public function __construct(UserRepositoryImplement $mainService)
    {
        $this->mainService = $mainService;
    }


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
        $user = $this->mainService->handleGoogle();
        Auth::login($user);

        return redirect()->route('detail.product');
    }

    public function details()
    {
        return view('layouts.detail');
    }

    public function checkout()
    {
        return view('layouts.checkout');
    }

    public function success_checkout()
    {
        return view('layouts.success_checkout');
    }
}
