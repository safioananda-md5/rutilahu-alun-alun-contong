<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
})->name("index");

Route::get('/login', function () {
    return view('auth.login');
})->name("login");

Route::get('/register', function () {
    return view('auth.register');
})->name("register");

Route::get('/home', function () {
    return view('page.dashboard.index');
})->name("home");

Route::get('/informasi', function () {
    return view('page.information.index');
})->name("information");

Route::get('/informasi-detail', function () {
    return view('page.information.detail');
})->name("information_detail");

Route::get('/pengajuan', function () {
    return view('page.submission.index');
})->name("pengajuan");

Route::get('/formulir-pengajuan', function () {
    return view('page.submission.form');
})->name("formulir_pengajuan");