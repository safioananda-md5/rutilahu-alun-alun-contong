<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use App\Helpers\ApiHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required',
                'nik' => 'required|unique:users,nik|numeric|digits_between:16,16',
                'no_kk' => 'required|numeric|digits_between:16,16',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'phone' => 'required|numeric|digits_between:10,15|unique:users,phone',
                'password' => 'required|min:8|confirmed',
                // 'address' => 'required',
                // 'city' => 'required',
                // 'province' => 'required',
                // 'district' => 'required',
                // 'village' => 'required',
                // 'rt' => 'required|numeric|digits_between:1,3',
                // 'rw' => 'required|numeric|digits_between:1,3',
                'foto_ktp' => 'required|mimes:jpeg,png,jpg|max:2048',
                'foto_selfi_ktp' => 'required|mimes:jpeg,png,jpg|max:2048',
                'foto_kk' => 'required|mimes:jpeg,png,jpg|max:2048',
                'validasi' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ], [
                'full_name.required' => 'Nama lengkap wajib diisi!',
                'nik.required' => 'NIK wajib diisi!',
                'nik.unique' => 'NIK telah digunakan!',
                'nik.numeric' => 'NIK wajib numerik!',
                'nik.digits_between' => 'NIK wajib 16 Digit!',
                'no_kk.required' => 'No. KK wajib diisi!',
                'no_kk.numeric' => 'No. KK wajib numerik!',
                'no_kk.digits_between' => 'No. KK wajib 16 Digit!',
                'email.required' => 'Email wajib diisi!',
                'email.email' => 'Format Email tidak sesuai!',
                'email.unique' => 'Email telah digunakan!',
                'phone.required' => 'No. Telepon wajib diisi!',
                'phone.numeric' => 'No. Telepon wajib numerik!',
                'phone.digits_between' => 'No. Telepon wajib 10 - 15 digit !',
                'phone.unique' => 'No. Telepon telah digunakan!',
                'password.required' => 'Password wajib diisi!',
                'password.min' => 'Password min. 8 karakter!',
                'password.confirmed' => 'Konfirmasi Password harus sesuai dengan Password!',
                // 'address' => 'Alamat wajib diisi!',
                // 'province' => 'Provinsi wajib diisi!',
                // 'city' => 'Kota wajib diisi!',
                // 'district' => 'Kecamatan wajib diisi!',
                // 'village' => 'Kelurahan wajib diisi!',
                // 'rt' => 'RT wajib diisi!',
                // 'rw' => 'RW wajib diisi!',
                'foto_ktp.required' => 'Foto KTP wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg, pdf dan maksimal ukuran 2MB!',
                'foto_ktp.mimes' => 'Foto KTP wajib berupa gambar dengan format jpeg, png, jpg, pdf!',
                'foto_ktp.max' => 'Foto KTP maksimal ukuran 2MB!',
                'foto_selfi_ktp.required' => 'Foto Selfi Dengan KTP wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg, pdf dan maksimal ukuran 2MB!',
                'foto_selfi_ktp.mimes' => 'Foto Selfi Dengan KTP wajib berupa gambar dengan format jpeg, png, jpg, pdf!',
                'foto_selfi_ktp.max' => 'Foto Selfi Dengan KTP maksimal ukuran 2MB!',
                'foto_kk.required' => 'Foto KK wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg, pdf dan maksimal ukuran 2MB!',
                'foto_kk.mimes' => 'Foto KK wajib berupa gambar dengan format jpeg, png, jpg, pdf!',
                'foto_kk.max' => 'Foto KK maksimal ukuran 2MB!',
                'validasi.required' => 'Anda harus menyetujui syarat dan ketentuan yang berlaku!',
                'g-recaptcha-response.required' => 'Silakan centang reCAPTCHA terlebih dahulu.',
                'g-recaptcha-response.captcha' => 'Token reCAPTCHA tidak valid atau sudah kadaluarsa. Silakan coba lagi.',
            ]);

            DB::beginTransaction();

            $provinceCode = Str::substr($request->no_kk, 0, 2);
            $regencyId = Str::substr($request->no_kk, 0, 2) . "." . Str::substr($request->no_kk, 2, 2);

            $user = User::create([
                'name' => strtoupper($request->full_name),
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'regency' =>  ApiHelper::getRegencyName($provinceCode, $regencyId),
                'phone' => $request->phone,
                'phone_verified_at' => null,
                'pic_nik' => "none",
                'pic_selfie_nik' => "none",
                'pic_no_kk' => "none",
                'system_verified_status' => 'unverified',
                'role' => 'user',
            ]);

            if ($request->hasFile('foto_ktp')) {
                $fotoktp = $request->file('foto_ktp');
                $fotoselfiktp = $request->file('foto_selfi_ktp');
                $fotokk = $request->file('foto_kk');
                $filename_fotoktp = Str::uuid() . '.' . $fotoktp->getClientOriginalExtension();
                $filename_fotoselfiktp = Str::uuid() . '.' . $fotoselfiktp->getClientOriginalExtension();
                $filename_fotokk = Str::uuid() . '.' . $fotokk->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('file_foto_ktp', $fotoktp, $filename_fotoktp);
                Storage::disk('public')->putFileAs('file_foto_selfi_ktp', $fotoselfiktp, $filename_fotoselfiktp);
                Storage::disk('public')->putFileAs('file_foto_kk', $fotokk, $filename_fotokk);

                // if ($request->file('foto_ktp')) {
                //     $filePath = $request->file('foto_ktp')->store('file_foto_ktp', 'public');
                // }

                // if ($request->file('foto_selfi_ktp')) {
                //     $filePath = $request->file('foto_selfi_ktp')->store('file_foto_selfi_ktp', 'public');
                // }
                // if ($request->file('foto_kk')) {
                //     $filePath = $request->file('foto_kk')->store('file_foto_kk', 'public');
                // }

                $user->update([
                    'pic_nik' => $filename_fotoktp,
                    'pic_selfie_nik' => $filename_fotoselfiktp,
                    'pic_no_kk' => $filename_fotokk,
                ]);
            }
            DB::commit();
            // Kirim email verifikasi
            // $user->sendEmailVerificationNotification();
            Flasher::addSuccess('Akun berhasil diajukan, silahkan menunggu proses verifikasi kurang lebih 7 (tujuh) hari kerja.');
            return response()->json(['status' => 1, 'message' => 'Akun berhasil diajukan, silahkan menunggu proses verifikasi.',  'redirect' => route('login')], 200);
        } catch (ValidationException $e) {
            $allErrors = [];
            foreach ($e->errors() as $field => $msgs) {
                $allErrors = array_merge($allErrors, $msgs);
            }

            return response()->json([
                'status' => 0,
                'message' => implode(' | ', $allErrors),
            ], 422);
        } catch (Throwable $e) {
            DB::rollback();

            if (!empty($filename_fotoktp) && Storage::disk('public')->exists('foto_ktp/' . $filename_fotoktp)) {
                Storage::disk('public')->delete('foto_ktp/' . $filename_fotoktp);
            }
            if (!empty($filename_fotoselfiktp) && Storage::disk('public')->exists('foto_selfi_ktp/' . $filename_fotoselfiktp)) {
                Storage::disk('public')->delete('foto_selfi_ktp/' . $filename_fotoselfiktp);
            }
            if (!empty($filename_fotokk) && Storage::disk('public')->exists('foto_kk/' . $filename_fotokk)) {
                Storage::disk('public')->delete('foto_kk/' . $filename_fotokk);
            }

            return response()->json(['status' => 0, 'message' => $e->getMessage()], 442);
        }
    }

    // public function verivicationSend(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);
    //     $user = User::where('email', $request->email)->firstOrFail();
    //     $user->sendEmailVerificationNotification();

    //     // Return
    //     // return back()->with('status', 'Link verifikasi baru telah dikirim!');
    // }

    public function verifyEmail(EmailVerificationRequest $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        if (! $request->hasValidSignature()) {
            abort(403, 'Tautan verifikasi tidak valid atau sudah kadaluarsa.');
        }

        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        flash()->success('Email berhasil di verifikasi, silahkan menunggu aktivasi akun maksimal 7 hari kerja.');
        return redirect('/login');
    }
}
