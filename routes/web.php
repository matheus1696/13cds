<?php

use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home'); })->name('home');
Route::get('/dashboard', function () {return redirect(route('dashboard.index')); })->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('portal')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
        Route::get('/profile', [ProfileController::class, 'editProfile'])->name('profile.editProfile');
        Route::patch('/profile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
        Route::get('/profile/password', [ProfileController::class, 'editPassword'])->name('profile.editPassword');
        
        Route::middleware('can:configuration_users')->group(function () {
            Route::get('configuration/users', [UserController::class, 'index'])->name('users.index');
            Route::get('configuration/user/create', [UserController::class, 'create'])->name('users.create');
            Route::post('configuration/user/store', [UserController::class, 'store'])->name('users.store');
            Route::put('configuration/users/permission/{user}',[UserController::class,'permission'])->name('users.permission');
        });
    });
});

require __DIR__.'/auth.php';
