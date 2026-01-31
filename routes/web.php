<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Admin route
Route::middleware(['auth', 'admin'])->group( function (){
    Route::get('/admin/dashboard', function (){
        return view('admin.dashboard');
    })->name('admin.dashboard');
});


// User Route
Route::middleware(['auth','user'])->group( function (){
    Route::get('/user/dashboard', function (){
        return view('users.dashboard');
    })->name('user.dashboard');
});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
