<?php
    
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/biography', function () {
    return view('biography');
});

Route::get('/bio1', function () {
    return view('bio1');
});

