<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/home');
})->name("index");

// Data wilayah
Route::get('/provinces', [WilayahController::class, 'getProvinces']);
Route::get('/cities/{id}', [WilayahController::class, 'getCities']);
Route::get('/district/{id}', [WilayahController::class, 'getDistrict']);
Route::get('/village/{id}', [WilayahController::class, 'getVillage']);

Route::get('/login', function () {
    return view('auth.login');
})->name("login");

// Register
Route::get('/register', function () {
    // flash()->success('Product created successfully!');
    return view('auth.register');
})->name("register");
Route::post('/register', [RegisterController::class, 'store'])->name("register.store");



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

Route::get('/rt', function () {
    return view('page.dashboard.rtrw');
})->name("dashboard_rt");

Route::get('/daftar-pengajuan', function () {
    return view('page.submission.list');
})->name("daftar_pengajuan");

Route::get('/detail-pengajuan', function () {
    return view('page.submission.detail');
})->name("detail_pengajuan");

Route::get('/admin', function () {
    return view('page.dashboard.admin');
})->name("dashboard_admin");

Route::get('/daftar-informasi', function () {
    return view('page.information.list');
})->name("daftar_informasi");

Route::get('/tambah-informasi', function () {
    return view('page.information.add');
})->name("tambah_informasi");