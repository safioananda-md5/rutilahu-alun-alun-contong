<?php

namespace App\Http\Controllers;

use App\Models\RTRW;
use App\Models\Submission;
use Throwable;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index()
    {
        $submissions = Submission::with('user')
            ->whereNotIn('status', [1, 3, 5, 7, 8, 9])
            ->get();
        $prospectivesubmissions = Submission::with('user')->where('status', 8)->get();
        $recipientsubmissions = Submission::with('user')->where('status', 9)->get();
        return view('page.dashboard.admin', compact('submissions', 'prospectivesubmissions', 'recipientsubmissions'));
    }

    public function account_verify()
    {
        return view('page.admin.account_verify');
    }

    public function account_verify_data()
    {
        // ubah format kolom salary jadi Rupiah
        // $users->transform(function ($user) {
        //     $user->salary = "Rp " . number_format($user->salary, 0, ',', '.');
        //     return $user;
        // });
        $users = User::where('system_verified_status', 'unverified')->where('role', 'user')->get()
            ->map(function ($user) {
                $user->created_at_display = Carbon::parse($user->created_at)->format('d/m/Y');

                $user->actions = (string) "<a href='" . route('admin.verification.account_verify_detail', Crypt::encrypt($user->id)) . "' class='btn btn-sm btn-info'>Verifikasi</a>";

                return $user;
            });
        return response()->json([
            "data" => $users ?? []
        ]);
    }

    public function account_verify_detail($id)
    {
        $DC_id = Crypt::decrypt($id);

        $user_data = User::where('id', $DC_id)->where('system_verified_status', 'unverified')->firstOrFail();

        if (!$user_data) {
            Flasher::addError('Detail akun tidak ditemukan!');
            return redirect()->route('admin.verification.account_verify_admin');
        }

        $StatusGamis = [
            [
                'name' => 'Keluarga Miskin (Gamis)',
                'value' => 'gamis'
            ],
            [
                'name' => 'Keluarga Pra Miskin (Pramis)',
                'value' => 'pramis'
            ],
            [
                'name' => 'Non Keluarga Miskin (Non-Gamis)',
                'value' => 'non-gamis'
            ]
        ];
        return view('page.admin.account_verify_detail', compact(['user_data', 'StatusGamis']));
    }

    public function showKTP($id)
    {
        $DC_id = Crypt::decrypt($id);
        $user_data = User::where('id', $DC_id)->first();

        $path = storage_path('app/public/file_foto_ktp/' . $user_data->pic_nik);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => mime_content_type($path)
        ]);
    }

    public function showSKTP($id)
    {
        $DC_id = Crypt::decrypt($id);
        $user_data = User::where('id', $DC_id)->first();

        $path = storage_path('app/public/file_foto_selfi_ktp/' . $user_data->pic_selfie_nik);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => mime_content_type($path)
        ]);
    }

    public function showKK($id)
    {
        $DC_id = Crypt::decrypt($id);
        $user_data = User::where('id', $DC_id)->first();

        $path = storage_path('app/public/file_foto_kk/' . $user_data->pic_no_kk);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => mime_content_type($path)
        ]);
    }

    public function store(Request $request, $id)
    {
        $id_DC = Crypt::decrypt($id);
        $status = "";
        $request->validate(
            [
                'status_gamis' => 'required',
                'verification' => 'required',
            ],
            [
                'status_gamis.required' => 'Status Keluarga Miskin wajib dipilih!',
                'verification.required' => 'Verifikasi Wajib dipilih!',
            ]
        );

        try {
            $user = User::where('id', $id_DC)->firstOrFail();
            DB::beginTransaction();
            if ($request->verification === 'yes') {
                $user->update([
                    'system_verified_status' => 'verified',
                    'poor_family_status' => $request->status_gamis,
                ]);
                $status = "DISETUJUI";
            } else {
                $user->delete();
                $status = "DITOLAK";
            }

            DB::commit();
            Flasher::addSuccess('Akun berhasil di verifikasi dengan status:' . $status);
            return redirect()->route('admin.verification.account_verify_admin');
        } catch (Throwable $e) {
            DB::rollBack();
            Flasher::addSuccess('Terdapat errot: ' . $e->getMessage());
            return back();
        }
    }

    public function rt_rw_index()
    {
        // $countRW = 6;
        // $countRT = [
        //     1 => 6,
        //     2 => 7,
        //     3 => 3,
        //     4 => 4,
        //     5 => 4,
        //     6 => 6,
        // ];

        $dataRW = RTRW::with('user')->where('status', 'RW')->get();
        $dataRT = RTRW::with('user')->where('status', 'RT')->get();
        return view('page.admin.account_rt_rw', compact('dataRW', 'dataRT'));
    }

    public function update_RTRW(Request $request)
    {
        $id = $request->id;
        $value = $request->value;
        $length = strlen($id);
        $RW = 0;
        $RT = 0;
        $message = "";
        $verify = false;
        $email = "";

        if ($length === 3) {
            $RW = $id[2];
            $message = "Data Nama RW " . $RW . " berhasil diperbarui.";
            $user = User::whereHas('rtrw', function ($query) use ($RW) {
                $query->where('status', 'RW')->where('number', $RW);
            })->first();
            $user->update(['name' => $value]);
            if ($user->name !== '[none]' && $user->phone !== '[none' . $RW . ']') {
                $user->update(['system_verified_status' => 'verified']);
            } else {
                $user->update(['system_verified_status' => 'unverified']);
            }
            if ($user->system_verified_status === 'verified') {
                $verify = true;
            }
            $email = 'RW' . str_pad($RW, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id';
        } elseif ($length === 5) {
            $RW = $id[4];
            $message = "Data No. Telepon RW " . $RW . " berhasil diperbarui.";
            $user = User::whereHas('rtrw', function ($query) use ($RW) {
                $query->where('status', 'RW')->where('number', $RW);
            })->first();
            if ($value === '[none]') {
                $user->update(['phone' => '[none' . $RW . ']']);
            } else {
                $user->update(['phone' => $value]);
            }
            if ($user->name !== '[none]' && $user->phone !== '[none' . $RW . ']') {
                $user->update(['system_verified_status' => 'verified']);
            } else {
                $user->update(['system_verified_status' => 'unverified']);
            }
            if ($user->system_verified_status === 'verified') {
                $verify = true;
            }
            $email = 'RW' . str_pad($RW, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id';
        } elseif ($length === 6) {
            $RW = $id[2];
            $RT = $id[5];
            $message = "Data Nama RW " . $RW . " RT " . $RT . " berhasil diperbarui.";
            $user = User::whereHas('rtrw', function ($query) use ($RW, $RT) {
                $query->where('parent', $RW)->where('status', 'RT')->where('number', $RT);
            })->first();
            $user->update(['name' => $value]);
            if ($user->name !== '[none]' && $user->phone !== '[none' . $RW . $RT . ']') {
                $user->update(['system_verified_status' => 'verified']);
            } else {
                $user->update(['system_verified_status' => 'unverified']);
            }
            if ($user->system_verified_status === 'verified') {
                $verify = true;
            }
            $email = 'RW' . str_pad($RW, 2, '0', STR_PAD_LEFT) . 'RT' . str_pad($RT, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id';
        } elseif ($length === 8) {
            $RW = $id[4];
            $RT = $id[7];
            $message = "Data No. Telepon RW " . $RW . " RT " . $RT . " berhasil diperbarui.";
            $user = User::whereHas('rtrw', function ($query) use ($RW, $RT) {
                $query->where('parent', $RW)->where('status', 'RT')->where('number', $RT);
            })->first();
            if ($value === '[none]') {
                $user->update(['phone' => '[none' . $RW . $RT . ']']);
            } else {
                $user->update(['phone' => $value]);
            }
            if ($user->name !== '[none]' && $user->phone !== '[none' . $RW . $RT . ']') {
                $user->update(['system_verified_status' => 'verified']);
            } else {
                $user->update(['system_verified_status' => 'unverified']);
            }
            if ($user->system_verified_status === 'verified') {
                $verify = true;
            }
            $email = 'RW' . str_pad($RW, 2, '0', STR_PAD_LEFT) . 'RT' . str_pad($RT, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id';
        }

        if ($message) {
            return response()->json([
                "status" => 1,
                "message" => $message,
                "verify" => $verify,
                "email" => $email,
            ], 200);
        } else {
            return response()->json([
                "status" => 0,
            ], 422);
        }
    }

    public function reserPWD_RTRW(Request $request)
    {
        $id = $request->id;
        $length = strlen($id);

        if ($length === 3) {
            $RW = $id[2];
            $user = User::whereHas('rtrw', function ($query) use ($RW) {
                $query->where('status', 'RW')->where('number', $RW);
            })->first();
            $user->update(['password' => '@AAC_Rw' . str_pad($RW, 2, '0', STR_PAD_LEFT)]);
            return response()->json([
                "status" => 1,
            ], 200);
        } elseif ($length === 6) {
            $RW = $id[2];
            $RT = $id[5];
            $user = User::whereHas('rtrw', function ($query) use ($RW, $RT) {
                $query->where('parent', 'RW' . $RW)->where('status', 'RT')->where('number', $RT);
            })->first();
            $user->update(['name' => '@AAC_Rt' . str_pad($RT, 2, '0', STR_PAD_LEFT)]);
            return response()->json([
                "status" => 1,
            ], 200);
        } else {
            return response()->json([
                "status" => 0,
            ], 422);
        }
    }
}
