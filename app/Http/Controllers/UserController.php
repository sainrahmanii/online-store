<?php

namespace App\Http\Controllers;

use App\Services\User\UserServiceImplement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $mainService;

    public function __construct(UserServiceImplement $mainService)
    {
        $this->mainService = $mainService;
    }

    public function registerView()
    {
        // return view('master');
    }

    public function register(Request $data)
    {
        $user = $this->mainService->createUser($data);
        return response()->json($user);
    }

    public function upgradePenjual(Request $data, $id)
    {
        $penjual = $this->mainService->upgradePenjual($data, $id);
        return response()->json($penjual);
    }
}
