<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\InformationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

// Data wilayah
Route::get('/provinces', [WilayahController::class, 'getProvinces']);
Route::get('/cities/{id}', [WilayahController::class, 'getCities']);
Route::get('/district/{id}', [WilayahController::class, 'getDistrict']);
Route::get('/village/{id}', [WilayahController::class, 'getVillage']);

// -------------------------==========

Route::get('/', function () {
    return redirect('/home');
})->name("index");

// Home
Route::get('/home', [DashboardController::class, 'index'])->name("home");

// Login
Route::get('/login', [LoginController::class, 'index'])->name("login");

// Register
Route::get('/register', [RegisterController::class, 'index'])->name("register");
Route::post('/register', [RegisterController::class, 'store'])->name("register.store");
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verifyEmail'])->name('verification.verify');
// Route::post('/email/verification-notification', [RegisterController::class, 'verivicationSend'])->name('verification.send');

// Verivied Email ================-----------------------------
Route::get('/email/verify', function () {
    return view('auth.verify-email'); // halaman tunggu verifikasi
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // tandai email sudah verified
    return redirect('/home')->with('status', 'Email berhasil diverifikasi!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'Link verifikasi baru telah dikirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// User Page ===============---------------------------------
// Information
Route::get('/informasi', [InformationController::class, 'index'])->name("information");
Route::get('/informasi-detail', [InformationController::class, 'detail'])->name("information_detail");

// Submission
Route::get('/pengajuan', [SubmissionController::class, 'index'])->name("pengajuan");
Route::get('/formulir-pengajuan', [SubmissionController::class, 'create'])->name("formulir_pengajuan");
// User Page ===============---------------------------------

// Admin Page ===============---------------------------------
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
// Admin Page ===============---------------------------------