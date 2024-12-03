<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\VehicleController;

// bago
// Route::middleware(['auth'])->group(function () {
//     Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//BAGOOO

Route::middleware(['auth'])->group(function () {
    // Route::get('/admin/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::post('vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
});

// use App\Http\Controllers\RentalController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ReportController;
// use App\Http\Controllers\SettingController;

// Route::middleware(['auth', 'admin'])->group(function () {
    // Route::get('/admin/rentals', [RentalController::class, 'index'])->name('rentals.index');
    // Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/admin/reports', [ReportController::class, 'index'])->name('reports.index');
    // Route::get('/admin/settings', [SettingController::class, 'index'])->name('settings.index');
// });






require __DIR__.'/auth.php';
