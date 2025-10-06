<?php

namespace App\Http\Controllers;

use App\Models\RTRW;
use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        // flash()->addSuccess('Data penyewaan berhasil ditambahkan.');
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // validasi input
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            Flasher::addError('Gagal Login | Terdapat isian data kosong.');
            return back();
        }

        $credentials = $request->only('email', 'password');
        // cek login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // cek kalau email belum diverifikasi
            if (is_null($user->email_verified_at)) {
                Flasher::addError('Gagal Login | Email belum diverifikasi.');
                Auth::logout();
                return back();
            }

            // cek kalau phone belum diverifikasi
            if (is_null($user->phone_verified_at)) {
                Flasher::addError('Gagal Login | No. Telepon belum diverifikasi.');
                Auth::logout();
                return back();
            }

            // cek kalau system belum verified
            if ($user->system_verified_status !== 'verified') {
                Flasher::addError('Gagal Login | Akun anda belum di verifikasi oleh system.');
                Auth::logout();
                return back();
            }

            if ($user->role === 'admin99') {
                Flasher::addSuccess('Login Berhasil | Selamat datang admin.');
                return redirect()->route('admin.dashboard_admin');
            }

            if ($user->role === 'rtrw') {
                $position = RTRW::where('user_id', $user->id)->first();
                if ($position->status === 'RT') {
                    Flasher::addSuccess('Login Berhasil | Selamat datang Ketua RT ' . str_pad($position->number, 2, '0', STR_PAD_LEFT) . '.');
                    return redirect()->route('RT.dashboard_rt');
                } else {
                    Flasher::addSuccess('Login Berhasil | Selamat datang Ketua RW ' . str_pad($position->number, 2, '0', STR_PAD_LEFT) . '.');
                    return redirect()->route('RW.dashboard_rw');
                }
            }

            Flasher::addSuccess('Login Berhasil | Selamat datang ' . $user->name . '.');
            return redirect()->intended('/home');
        }

        Flasher::addError('Gagal Login | Credential akun tidak sesuai.');
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Flasher::addSuccess('Logout Berhasil | Sampai berjumpa kembali.');
        return redirect(route('login'));
    }
}
