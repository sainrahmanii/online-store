<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.index');
    }

    public function products()
    {
        return view('layouts.dashboard.products.index');
    }

    public function checkouts()
    {
        return view('layouts.dashboard.checkouts.index');
    }
}
