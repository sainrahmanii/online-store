<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\KategoriController;

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

Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);

// socialite
Route::get('/auth/google', [AuthController::class, 'google'])->name('auth.google');

// Route::get('/', [UserController::class, 'registerView']);
Route::prefix('users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/create-penjual', 'createPenjual');
    });
});

Route::prefix('roles')->group(function () {
    Route::controller(RoleController::class)->group(function () {
        Route::post('/create', 'createRole');
        Route::put('/{}', 'updateRole');
    });
});

Route::prefix('kategoris')->group(function () {
    Route::controller(KategoriController::class)->group(function () {
        Route::post('/create', 'createKategori');
    });
});

Route::prefix('vouchers')->group(function () {
    Route::controller(VoucherController::class)->group(function () {
        Route::post('/create', 'createVoucher');
    });
});
