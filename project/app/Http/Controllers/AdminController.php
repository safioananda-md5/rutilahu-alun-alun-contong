<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function index()
    {
        return view('page.dashboard.admin');
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
        $users = User::where('system_verified_status', 'unverified')->get()
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

        $user_data = User::where('id', $DC_id)->first();

        if (!$user_data) {
            Flasher::addError('Detail akun tidak ditemukan!');
            return redirect()->route('admin.verification.account_verify_admin');
        }
        return view('page.admin.account_verify_detail', compact(['user_data']));
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
        $DC_id = Crypt::decrypt($id);
        $user_data = User::where('id', $DC_id)->first();
        $action = Crypt::decrypt($request->action);

        if ($action === 'tolak') {
            $user_data->system_verified_status = 'unverified';
            $user_data->nik = $user_data->nik . '-del-' . (string) Str::uuid();
            $user_data->email = $user_data->email . '-del-' . (string) Str::uuid();
            $user_data->phone = $user_data->phone . '-del-' . (string) Str::uuid();
            $user_data->save();
            $user_data->delete();
            Flasher::addSuccess('Akun berhasil di verifikasi dengan status:DITOLAK');
        } elseif ($action === 'setujui') {
            $user_data->system_verified_status = 'verified';
            $user_data->save();
            Flasher::addSuccess('Akun berhasil di verifikasi dengan status:DISETUJUI');
        }

        return redirect()->route('admin.verification.account_verify_admin');
    }
}
