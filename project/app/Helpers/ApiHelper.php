<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class ApiHelper
{
    /**
     * Ambil nama kota berdasarkan kode provinsi dan kode kota (code)
     *
     * @param string $provinceCode
     * @param string $regencyCode
     * @return string
     */
    public static function getRegencyName($provinceCode, $regencyCode)
    {
        $url = "https://wilayah.id/api/regencies/{$provinceCode}.json";
        $response = Http::get($url);

        if (!$response->successful()) {
            return "API Regency tidak terhubung!";
        }

        $data = collect($response->json()['data'] ?? []);
        $regency = $data->firstWhere('code', $regencyCode);

        return $regency['name'] ?? "Kota Tidak Terdaftar!";
    }
}
