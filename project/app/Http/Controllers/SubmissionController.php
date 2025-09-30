<?php

namespace App\Http\Controllers;

use Throwable;
use App\Helpers\ApiHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SubmissionController extends Controller
{
    public function index()
    {
        $regency = Auth::user()->regency;
        return view('page.submission.index', compact('regency'));
    }

    public function create()
    {
        $Legalitas = [
            [
                'name' => 'Hilang/ tidak bisa menunjukan',
                'value' => 1
            ],
            [
                'name' => 'SHPL',
                'value' => 2
            ],
            [
                'name' => 'Sewa/ milik pihak lain',
                'value' => 3
            ],
            [
                'name' => 'Letter c',
                'value' => 4
            ],
            [
                'name' => 'Petok D',
                'value' => 5
            ],
            [
                'name' => 'SHGB',
                'value' => 6
            ],
            [
                'name' => 'SHM',
                'value' => 7
            ],
        ];

        $Katap = [
            [
                'name' => 'Rusak ringan',
                'value' => 1
            ],
            [
                'name' => 'Rusak sedang',
                'value' => 2
            ],
            [
                'name' => 'Rusak berat',
                'value' => 3
            ],
        ];

        $Kdinding = [
            [
                'name' => 'Dinding tidak diplester',
                'value' => 1
            ],
            [
                'name' => 'Dinding kurang tinggi',
                'value' => 2
            ],
            [
                'name' => 'Bata kualitas rendah/ dinding lembab',
                'value' => 3
            ],
            [
                'name' => 'Tidak ada tembok/ tumpang tetangga',
                'value' => 4
            ],
        ];

        $Klantai = [
            [
                'name' => 'Lantai keramik sebagaian',
                'value' => 1
            ],
            [
                'name' => 'Lantai non keramik',
                'value' => 2
            ],
            [
                'name' => 'Lantai rendah keramik',
                'value' => 3
            ],
            [
                'name' => 'Lantai rendah non keramik',
                'value' => 4
            ],
        ];

        return view('page.submission.form', compact('Legalitas', 'Katap', 'Kdinding', 'Klantai'));
    }

    public function store(Request $request)
    {
        try {
            $request->merge([
                'revenue' => str_replace('.', '', $request->revenue),
                'asset' => str_replace('.', '', $request->asset)
            ]);

            $request->validate([
                'address' => 'required',
                'no_rt' => 'required|numeric',
                'no_rw' => 'required|numeric',
                'revenue' => 'required|numeric',
                'asset' => 'required|numeric',
                'dependents' => 'required|numeric',
                'building_area' => 'required|numeric',
                'building_legality' => 'required|numeric',
                'roof_condition' => 'required|numeric',
                'wall_condition' => 'required|numeric',
                'floor_condition' => 'required|numeric',
                'certificate_of_domicile' => 'required|mimes:pdf|max:2048',
                'certificate_of_ownership' => 'required|mimes:pdf|max:2048',
                'statement_of_nodispute' => 'required|mimes:pdf|max:2048',
                'statement_of_neverreceivedassistance' => 'required|mimes:pdf|max:2048',
                'statement_of_sellthehouse' => 'required|mimes:pdf|max:2048',
                'statement_of_incomebelowminimumwage' => 'sometimes|required|mimes:pdf|max:2048',
                'CheckTrueData' => 'required',
            ], [
                'address.required' => 'Data Alamat Lengkap wajib diisi!',
                'no_rt.required' => 'Data RT wajib diisi!',
                'no_rt.numeric' => 'Data RT wajib angka!',
                'no_rw.required' => 'Data RT wajib diisi!',
                'no_rw.numeric' => 'Data RT wajib angka!',
                'revenue.required' => 'Data Pendapatan wajib diisi!',
                'revenue.numeric' => 'Data Pendapatan wajib angka!',
                'asset.required' => 'Data Jumlah Asset wajib diisi!',
                'asset.numeric' => 'Data Jumlah Asset wajib angka!',
                'dependents.required' => 'Data Tanggungan Keluarga wajib diisi!',
                'dependents.numeric' => 'Data Tanggungan Keluarga wajib angka!',
                'building_area.required' => 'Data Luas Bangunan wajib diisi!',
                'building_area.numeric' => 'Data Luas Bangunan wajib angka!',
                'building_legality.required' => 'Data Hak Milik Bangunan wajib diisi!',
                'building_legality.numeric' => 'Data Hak Milik Bangunan wajib angka!',
                'roof_condition.required' => 'Data Kondisi Atap wajib diisi!',
                'roof_condition.numeric' => 'Data Kondisi Atap wajib angka!',
                'wall_condition.required' => 'Data Kondisi Dinding wajib diisi!',
                'wall_condition.numeric' => 'Data Kondisi Dinding wajib angka!',
                'floor_condition.required' => 'Data Kondisi Lantai wajib diisi!',
                'floor_condition.numeric' => 'Data Kondisi Lantai wajib angka!',
                'certificate_of_domicile.required' => 'Data Surat Domisili wajib diisi!',
                'certificate_of_domicile.mimes' => 'Data Surat Domisili wajib format .pdf!',
                'certificate_of_domicile.max' => 'Data Surat Domisili maksimal 2 mb!',
                'certificate_of_ownership.required' => 'Data Surat Hak Milik wajib diisi!',
                'certificate_of_ownership.mimes' => 'Data Surat Hak Milik wajib format .pdf!',
                'certificate_of_ownership.max' => 'Data Surat Hak Milik maksimal 2 mb!',
                'statement_of_nodispute.required' => 'Data Pernyataan Tidak Dalam Sengketa wajib diisi!',
                'statement_of_nodispute.mimes' => 'Data Pernyataan Tidak Dalam Sengketa wajib format .pdf!',
                'statement_of_nodispute.max' => 'Data Pernyataan Tidak Dalam Sengketa maksimal 2 mb!',
                'statement_of_neverreceivedassistance.required' => 'Data Pernyataan Tidak Pernah Menerima Bantuan Rutilahu wajib diisi!',
                'statement_of_neverreceivedassistance.mimes' => 'Data Pernyataan Tidak Pernah Menerima Bantuan Rutilahu wajib format .pdf!',
                'statement_of_neverreceivedassistance.max' => 'Data Pernyataan Tidak Pernah Menerima Bantuan Rutilahu maksimal 2 mb!',
                'statement_of_sellthehouse.required' => 'Data Pernyataan Tidak Menjual Rumah Dalam Kurun 5 (lima) Tahun wajib diisi!',
                'statement_of_sellthehouse.mimes' => 'Data Pernyataan Tidak Menjual Rumah Dalam Kurun 5 (lima) Tahun wajib format .pdf!',
                'statement_of_sellthehouse.max' => 'Data Pernyataan Tidak Menjual Rumah Dalam Kurun 5 (lima) Tahun maksimal 2 mb!',
                'statement_of_incomebelowminimumwage.required' => 'Data Pernyataan Pendapatan Dibawah UMK wajib diisi!',
                'statement_of_incomebelowminimumwage.mimes' => 'Data Pernyataan Pendapatan Dibawah UMK wajib format .pdf!',
                'statement_of_incomebelowminimumwage.max' => 'Data Pernyataan Pendapatan Dibawah UMK maksimal 2 mb!',
                'CheckTrueData.required' => 'Pernyataan Data Isian Benar wajib dicentang!',
            ]);

            DB::beginTransaction();
        } catch (ValidationException $e) {
            DB::rollback();
            $allErrors = [];
            foreach ($e->errors() as $field => $msgs) {
                $allErrors = array_merge($allErrors, $msgs);
            }
            $errorString = implode(' | ', $allErrors);
            Flasher::addError('Terdapat error pada : ' . $errorString);
            return redirect()->route('pengajuan');
        } catch (Throwable $e) {
            DB::rollback();
            Flasher::addError('Terdapat error pada : ' . $e->getMessage());
            return redirect()->route('pengajuan');
        }
    }
}
