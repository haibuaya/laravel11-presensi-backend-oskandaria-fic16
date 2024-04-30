<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard',['type_menu'=>'dashboard']);
    })->name('home');

    Route::get('users',function(){
        return view('pages.users.components-table');
    });
    // Route::resource('users', UserController::class);
    // //doctors
    // Route::resource('doctors', DoctorController::class);
});

