<?php

use Illuminate\Support\Facades\Route;

Route::get('profilecard', function () {
    return view('profilecard');
});

Route::get('navbar', function () {
    return view('navbar');
});
