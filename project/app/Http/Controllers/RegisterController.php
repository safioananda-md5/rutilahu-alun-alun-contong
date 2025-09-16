<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        dd($request->all());
        // $request->validate([
        //     'full_name' => 'required',
        //     'nik' => 'required|unique:users,nik|numeric|digits_between:16,16',
        //     'no_kk' => 'required|numeric|digits_between:16,16',
        //     'email' => 'required|email|unique:users,email',
        //     'phone' => 'required|numeric|digits_between:10,15',
        //     'address' => 'required',
        //     'city' => 'required',
        //     'province' => 'required',
        //     'district' => 'required',
        //     'village' => 'required',
        //     'rt' => 'required|numeric|digits_between:1,3',
        //     'rw' => 'required|numeric|digits_between:1,3',
        //     'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'foto_kk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'validasi' => 'required',
        // ], [
        //     'full_name' => 'Nama lengkap wajib diisi!',
        //     'nik' => '16 Digit NIK wajib diisi!',
        //     'no_kk' => '16 Digit No. KK wajib diisi!',
        //     'email' => 'Email wajib diisi!',
        //     'phone' => 'Phone wajib diisi!',
        //     'address' => 'Alamat wajib diisi!',
        //     'province' => 'Provinsi wajib diisi!',
        //     'city' => 'Kota wajib diisi!',
        //     'district' => 'Kecamatan wajib diisi!',
        //     'village' => 'Kelurahan wajib diisi!',
        //     'rt' => 'RT wajib diisi!',
        //     'rw' => 'RW wajib diisi!',
        //     'foto_ktp' => 'Foto KTP wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
        //     'foto_kk' => 'Foto KK wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
        //     'validasi' => 'Anda harus menyetujui syarat dan ketentuan yang berlaku!',
        // ]);

        // // gunakan try and catch untuk menganulir jika data error atau success
        // try {
        //     // User::create([
        //     //     'name' => $request->input_nama,
        //     //     'email' => $request->input_email,
        //     //     'email_verified_at' => now(),
        //     //     'password' => Hash::make($request->input_password),
        //     // ]);
        //     $fotoktp = $request->file('foto_ktp');
        //     $fotokk = $request->file('foto_kk');
        //     $filename_fotoktp = Str::uuid() . '.' . $fotoktp->getClientOriginalExtension();
        //     $filename_fotokk = Str::uuid() . '.' . $fotokk->getClientOriginalExtension();
        //     Storage::disk('public')->putFileAs('foto_ktp', $fotoktp, $filename_fotoktp);
        //     Storage::disk('public')->putFileAs('foto_kk', $fotokk, $filename_fotokk);

        //     // User::create([
        //     //     'name' => $request->full_name,
        //     //     'nik' => $request->nik,
        //     //     'no_kk' => $request->no_kk,
        //     //     'email' => $request->email,
        //     //     'phone' => $request->phone,
        //     //     'address' => $request->address,
        //     //     'city' => $request->city,
        //     //     'province' => $request->province,
        //     //     'district' => $request->district,
        //     //     'village' => $request->village,
        //     //     'rt' => $request->rt,
        //     //     'rw' => $request->rw,
        //     //     'foto_ktp' => $filename_fotoktp,
        //     //     'foto_kk' => $filename_fotokk,
        //     //     'password' => Hash::make($request->input('password')),
        //     // ]);
        //     return response()->json(['status' => 1, 'message' => 'Data berhasil ditambahkan.']);
        //     // dd($request->all());
        // } catch (Throwable $e) {
        //     return response()->json(['status' => 0, 'message' => $e->getMessage()]);
        // }
    }
}
