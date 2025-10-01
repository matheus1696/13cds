<?php

use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DelegateController;
use App\Http\Controllers\Admin\ProposedController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/fotos', [PublicController::class, 'fotos'])->name('fotos');
Route::get('/regimento', [PublicController::class, 'regimento'])->name('regimento');
Route::get('/decreto', [PublicController::class, 'decreto'])->name('decreto');
Route::get('/convocatoria', [PublicController::class, 'convocatoria'])->name('convocatoria');
Route::get('/programacao', [PublicController::class, 'programacao'])->name('programacao');
Route::get('/delegados', [PublicController::class, 'delegados'])->name('delegados');
Route::get('/propostas', [PublicController::class, 'propostas'])->name('propostas');

Route::get('/dashboard', function () {return redirect(route('dashboard.index')); })->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('cms')->group(function () {

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

        Route::resource('proposeds', ProposedController::class)->middleware('can:configuration_proposeds');
        Route::resource('delegates', DelegateController::class)->middleware('can:configuration_delegates');
    });
});

require __DIR__.'/auth.php';
