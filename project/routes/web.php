<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.index');
})->name('home');
