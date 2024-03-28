<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('home');
});

Route::get('/2', function () {
    return view('Teste1');
});


