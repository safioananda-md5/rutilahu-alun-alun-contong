<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{
    public function getProvinces()
    {
        // Ambil data dari API
        $response = Http::get('https://wilayah.id/api/provinces.json');

        if ($response->successful()) {
            return response()->json($response->json()['data']); // hanya kirim array data
        }
        return response()->json([], 500);
    }

    public function getCities($id)
    {
        // Ambil data dari API berdasarkan ID provinsi
        $response = Http::get("https://wilayah.id/api/regencies/$id.json");

        if ($response->successful()) {
            return response()->json($response->json()['data']); // hanya kirim array data
        }
        return response()->json([], 500);
    }

    public function getDistrict($id)
    {
        // Ambil data dari API berdasarkan ID kota
        $response = Http::get("https://wilayah.id/api/districts/$id.json");

        if ($response->successful()) {
            return response()->json($response->json()['data']); // hanya kirim array data
        }
        return response()->json([], 500);
    }

    public function getVillage($id)
    {
        // Ambil data dari API berdasarkan ID kota
        $response = Http::get("https://wilayah.id/api/villages/$id.json");

        if ($response->successful()) {
            return response()->json($response->json()['data']); // hanya kirim array data
        }
        return response()->json([], 500);
    }
}
