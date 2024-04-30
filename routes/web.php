<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard12', function () {
    return view('pages.dashboard',['type_menu'=>'dashboard']);
});

