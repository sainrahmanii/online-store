<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

// Route::get('/', [UserController::class, 'registerView']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/create-penjual', [UserController::class, 'createPenjual']);
Route::resource('index', UserController::class);
