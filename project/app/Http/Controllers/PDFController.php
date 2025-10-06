<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index($filename, $code)
    {
        $folder = [
            1 => 'sertifikat_domisili',
            2 => 'sertifikat_hak_milik',
            3 => 'pernyataan_tidak_sengketa',
            4 => 'pernyataan_tidak_bantuan',
            5 => 'pernyataan_tidak_menjual_rumah',
            6 => 'pernyataan_pendapatan_dibawah_umk',
        ];

        $path = storage_path('app/public/' . $folder[$code] . '/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}
