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

    public function createProduct()
    {
        return view('layouts.dashboard.products.create');
    }

    public function editProduct()
    {
        return view('layouts.dashboard.products.edit');
    }

    public function updateStatus()
    {
        return view('layouts.dashboard.checkouts.edit');
    }
}
