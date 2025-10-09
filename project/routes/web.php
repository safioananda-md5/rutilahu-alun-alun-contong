<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RTRWController;
use App\Http\Controllers\AdminController;
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

Route::get('/pdf/{filename}/{code}', [PDFController::class, 'index'])->name("blank_pdf");

// Home
Route::get('/home', [DashboardController::class, 'index'])->name("home");

// Login
Route::get('/login', [LoginController::class, 'index'])->name("login")->middleware('redirect.role');
Route::post('/login', [LoginController::class, 'login'])->name("login_post");
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name("register");
Route::post('/register', [RegisterController::class, 'store'])->name("register.store");
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verifyEmail'])->name('verification.verify');
// Route::post('/email/verification-notification', [RegisterController::class, 'verivicationSend'])->name('verification.send');

// Verivied Email ================-----------------------------
// Route::get('/email/verify', function () {
//     return view('auth.verify-email'); // halaman tunggu verifikasi
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill(); // tandai email sudah verified
//     return redirect('/home')->with('status', 'Email berhasil diverifikasi!');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
//     return back()->with('status', 'Link verifikasi baru telah dikirim!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// User Page ===============---------------------------------
// Information
Route::get('/informasi', [InformationController::class, 'index'])->name("information");
Route::get('/informasi-detail/{id}', [InformationController::class, 'detail'])->name("information_detail");

// Submission
Route::get('/pengajuan', [SubmissionController::class, 'index'])->name("pengajuan")->middleware('checkRole:user');
Route::get('/formulir-pengajuan', [SubmissionController::class, 'create'])->name("formulir_pengajuan")->middleware('checkRole:user');
Route::post('/formulir-pengajuan/{id}', [SubmissionController::class, 'store'])->name("store_formulir_pengajuan")->middleware('checkRole:user');
Route::get('/formulir-detail', [SubmissionController::class, 'detail'])->name("formulir_detail")->middleware('auth');
// User Page ===============---------------------------------

// Admin Page ===============---------------------------------

Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'checkRole:admin99'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name("dashboard_admin");
    Route::group(['prefix' => '/verifikasi', 'as' => 'verification.'], function () {
        Route::get('/daftar-verifikasi-akun', [AdminController::class, 'account_verify'])->name("account_verify_admin");
        Route::post('/data-verifikasi-akun', [AdminController::class, 'account_verify_data'])->name("account_verify_data");
        Route::get('/detail-verifikasi-akun/{id}', [AdminController::class, 'account_verify_detail'])->name("account_verify_detail");
        Route::get('/show/X18lqWqNA5sy/{id}', [AdminController::class, 'showKTP'])->name('showKTP');
        Route::get('/show/KiapbdVqajxM/{id}', [AdminController::class, 'showSKTP'])->name('showSKTP');
        Route::get('/show/s1q6IppjLCiR/{id}', [AdminController::class, 'showKK'])->name('showKK');
        Route::post('/store/{id}', [AdminController::class, 'store'])->name('store');
        Route::get('/daftar-verifikasi-pengajuan', [AdminController::class, 'submission_verify'])->name('submission_verify_admin');
    });
    Route::group(['prefix' => '/informasi', 'as' => 'information.'], function () {
        Route::get('/daftar-informasi', [InformationController::class, 'list_information'])->name("list_information");
        Route::get('/tambah-informasi', [InformationController::class, 'create_information'])->name("create_information");
        Route::post('/store-informasi', [InformationController::class, 'store'])->name("store_information");
        Route::get('/edit-informasi/{id}', [InformationController::class, 'edit_information'])->name("edit_information");
        Route::put('/update-informasi/{id}', [InformationController::class, 'update_information'])->name("update_information");
        Route::post('/destroy-informasi', [InformationController::class, 'destroy_information'])->name("destroy_information");
        Route::delete('/destroy', [InformationController::class, 'destroy'])->name("destroy");
    });
    Route::group(['prefix' => '/akun', 'as' => 'account.'], function () {
        Route::get('/rt-rw', [AdminController::class, 'rt_rw_index'])->name("rt_rw_index");
        Route::put('/update', [AdminController::class, 'update_RTRW'])->name("update_RTRW");
        Route::put('/updatePWD', [AdminController::class, 'reserPWD_RTRW'])->name("reserPWD_RTRW");
    });

    Route::get('/detail-pengajuan/{id}', [RTRWController::class, 'detail'])->name("detail_pengajuan");
    Route::post('/survey-pengajuan/photo/upload/{id}', [SubmissionController::class, 'upload'])->name("upload_survey");
    Route::delete('/survey-pengajuan/photo/destroy/{id}', [SubmissionController::class, 'destroy'])->name("destroy_survey");
    Route::get('/data-calon-penerima', [AdminController::class, 'submission_prospective'])->name('submission_prospective_admin');

    Route::group(['prefix' => '/batch', 'as' => 'batch.'], function () {
        Route::get('/batch-penerimaan', [AdminController::class, 'submission_batch'])->name('submission_batch_admin');
        Route::post('/batch-penerimaan', [AdminController::class, 'submission_batch_store'])->name('submission_batch_store');
        Route::get('/detail-penerimaan-batch/{id}', [AdminController::class, 'submission_batch_detail'])->name('submission_batch_detail');
    });

    Route::group(['prefix' => '/math', 'as' => 'math.'], function () {
        Route::post('/rekomendasi-pengajuan', [AdminController::class, 'calculation_submission_store'])->name('calculation_submission_store');
        Route::get('/rekomendasi-pengajuan/{count}', [AdminController::class, 'calculation_submission'])->name('calculation_submission');
    });
});


Route::group(['prefix' => '/20251001-5G7K', 'as' => 'data.', 'middleware' => 'auth'], function () {
    Route::post('/20251001-9L2Q/{name}/{id}', [DataController::class, 'nik'])->name("nik_data");
    Route::post('/20251001-2H6M/{name}/{id}', [DataController::class, 'kk'])->name("kk_data");
});

// Admin Page ===============---------------------------------

// RT RW Page ===============---------------------------------

Route::group(['prefix' => '/RT', 'as' => 'RT.', 'middleware' => 'checkRole:rtrw'], function () {
    Route::get('/dashboard', [RTRWController::class, 'index'])->name("dashboard_rt");
    Route::get('/detail-pengajuan/{id}', [RTRWController::class, 'detail'])->name("detail_pengajuan");
});

Route::group(['prefix' => '/RW', 'as' => 'RW.', 'middleware' => 'checkRole:rtrw'], function () {
    Route::get('/dashboard', [RTRWController::class, 'index'])->name("dashboard_rw");
    Route::get('/detail-pengajuan/{id}', [RTRWController::class, 'detail'])->name("detail_pengajuan");
});

Route::post('/SetujuRTRW/{id}', [RTRWController::class, 'update'])->name("update_pengajuan_RT");

// RT RW Page ===============---------------------------------