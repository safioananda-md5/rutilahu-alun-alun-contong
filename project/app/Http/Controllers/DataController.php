<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DataController extends Controller
{
    public function nik($name, $id)
    {
        $id_DC = Crypt::decrypt($id);
        $name_DC = Crypt::decrypt($name);
        if ($name_DC !== "211") {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak didapatkan',
                'data' => null
            ], 404);
        }
        $user_nik = User::select('nik')->where('id', $id_DC)->firstOrFail();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil didapatkan',
            'data' => $user_nik->nik
        ], 200);
    }

    public function kk($name, $id)
    {
        $id_DC = Crypt::decrypt($id);
        $name_DC = Crypt::decrypt($name);
        if ($name_DC !== "122") {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak didapatkan',
                'data' => null
            ], 404);
        }
        $user_nik = User::select('no_kk')->where('id', $id_DC)->firstOrFail();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil didapatkan',
            'data' => $user_nik->no_kk
        ], 200);
    }
}
