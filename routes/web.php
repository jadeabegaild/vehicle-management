<?php

use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $vehicles = Vehicle::all();
        return view('dashboard', ['vehicles' => $vehicles]);
    })->name('dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', function () {
            return 'Admin Dashboard';
        });
    });
    
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/customer', function () {
            return 'Customer Dashboard';
        });
    });
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
