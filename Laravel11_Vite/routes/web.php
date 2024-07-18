<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dummy_react', function () {
    return view('dummy_react');
});

// Route::get('/react', function () {
//     return view('react');
// });
