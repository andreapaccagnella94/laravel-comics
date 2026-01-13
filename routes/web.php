<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    // se non vogliamo avere una home e reindirizzare dove vogliamo
    // return redirect("comics");
})->name("home"); // dare un nome alla rotta

Route::get('/comics', function () {
    // passo qua le informazioni dei fumetti senza sporcare la pagina
    $comics = config("comics");
    return view('comics', compact("comics"));
})->name("comics"); // dare un nome alla rotta


// mi alleno con le rotte
Route::get('/characters', function () {
    return "characters";
})->name("characters");

Route::get('/movies', function () {
    return "movies";
})->name("movies");

Route::get('/tv', function () {
    return "tv";
})->name("tv");

Route::get('/games', function () {
    return "games";
})->name("games");

Route::get('/collectibles', function () {
    return "collectibles";
})->name("collectibles");

Route::get('/videos', function () {
    return "videos";
})->name("videos");

Route::get('/fans', function () {
    return "fans";
})->name("fans");

Route::get('/news', function () {
    return "news";
})->name("news");

Route::get('/shop', function () {
    return "shop";
})->name("shop");
