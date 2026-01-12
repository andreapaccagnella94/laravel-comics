<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home"); // dare un nome alla rotta

Route::get('/comics', function () {
    return view('comics');
})->name("comics"); // dare un nome alla rotta
