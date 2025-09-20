<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

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

                $user->actions = '
                    <a href="/users/' . $user->id . '" class="btn btn-sm btn-info">Detail</a>
                    <a href="/users/' . $user->id . '/edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/users/' . $user->id . '/delete" class="btn btn-sm btn-danger">Delete</a>
                ';
                return $user;
            });
        return response()->json([
            "data" => $users
        ]);
    }
}
