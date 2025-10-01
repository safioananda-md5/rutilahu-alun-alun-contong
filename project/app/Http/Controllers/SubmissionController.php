<?php

namespace App\Http\Controllers;

use Throwable;
use App\Helpers\ApiHelper;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::where('user_id', Auth::user()->id)->first();
        return view('page.submission.index', compact('submissions'));
    }

    public function create()
    {
        $submissions = Submission::where('user_id', Auth::user()->id)->first();
        if ($submissions) {
            return redirect(404);
        }

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

    public function store(Request $request, $id)
    {
        $id_DC = Crypt::decrypt($id);
        // dd($request->all());
        try {
            $request->merge([
                'revenue' => str_replace('.', '', $request->revenue),
                'asset' => str_replace('.', '', $request->asset)
            ]);

            $request->validate([
                'address' => 'required',
                'no_rt' => 'required|numeric',
                'no_rw' => 'required|numeric',
                'revenue' => 'sometimes|required|numeric',
                'asset' => 'sometimes|required|numeric',
                'dependents' => 'sometimes|required|numeric',
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

            if ($request->hasFile('certificate_of_domicile')) {
                $domicile = $request->file('certificate_of_domicile');
                $filename_domicile = Str::uuid() . '.' . $domicile->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('sertifikat_domisili', $domicile, $filename_domicile);
            }

            if ($request->hasFile('certificate_of_ownership')) {
                $ownership = $request->file('certificate_of_ownership');
                $filename_ownership = Str::uuid() . '.' . $ownership->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('sertifikat_hak_milik', $ownership, $filename_ownership);
            }

            if ($request->hasFile('statement_of_nodispute')) {
                $nodispute = $request->file('statement_of_nodispute');
                $filename_nodispute = Str::uuid() . '.' . $nodispute->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('pernyataan_tidak_sengketa', $nodispute, $filename_nodispute);
            }

            if ($request->hasFile('statement_of_neverreceivedassistance')) {
                $neverreceivedassistance = $request->file('statement_of_neverreceivedassistance');
                $filename_neverreceivedassistance = Str::uuid() . '.' . $neverreceivedassistance->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('pernyataan_tidak_bantuan', $neverreceivedassistance, $filename_neverreceivedassistance);
            }

            if ($request->hasFile('statement_of_sellthehouse')) {
                $statement_of_sellthehouse = $request->file('statement_of_sellthehouse');
                $filename_statement_of_sellthehouse = Str::uuid() . '.' . $statement_of_sellthehouse->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('pernyataan_tidak_menjual_rumah', $statement_of_sellthehouse, $filename_statement_of_sellthehouse);
            }

            if ($request->hasFile('statement_of_incomebelowminimumwage')) {
                $statement_of_incomebelowminimumwage = $request->file('statement_of_incomebelowminimumwage');
                $filename_statement_of_incomebelowminimumwage = Str::uuid() . '.' . $statement_of_incomebelowminimumwage->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('pernyataan_pendapatan_dibawah_umk', $statement_of_incomebelowminimumwage, $filename_statement_of_incomebelowminimumwage);
            }

            $user = User::select('poor_family_status')->where('id', $id_DC)->firstOrFail();

            if ($user->poor_family_status !== 'non-gamis') {
                $submission = Submission::create([
                    'submission_id' => 'RUTILAHU-' . date('YmdHis') . '-' . strtoupper(Str::random(5) . $id_DC),
                    'user_id' => $id_DC,
                    'address' => $request->address,
                    'no_rt' => $request->no_rt,
                    'no_rw' => $request->no_rw,
                    'revenue' => 600000,
                    'asset' => 500000,
                    'dependents' => 6,
                    'building_area' => $request->building_area,
                    'building_legality' => $request->building_legality,
                    'roof_condition' => $request->roof_condition,
                    'wall_condition' => $request->wall_condition,
                    'floor_condition' => $request->floor_condition,
                    'certificate_of_domicile' => $filename_domicile,
                    'certificate_of_ownership' => $filename_ownership,
                    'statement_of_nodispute' => $filename_nodispute,
                    'statement_of_neverreceivedassistance' => $filename_neverreceivedassistance,
                    'statement_of_sellthehouse' => $filename_statement_of_sellthehouse,
                    'statement_of_incomebelowminimumwage' => $filename_statement_of_incomebelowminimumwage,
                    'status' => '2',
                ]);
            } else {
                $submission = Submission::create([
                    'submission_id' => 'RUTILAHU-' . date('YmdHis') . '-' . strtoupper(Str::random(5)) . $id_DC,
                    'user_id' => $id_DC,
                    'address' => $request->address,
                    'no_rt' => $request->no_rt,
                    'no_rw' => $request->no_rw,
                    'revenue' => $request->revenue,
                    'asset' => $request->asset,
                    'dependents' => $request->dependents,
                    'building_area' => $request->building_area,
                    'building_legality' => $request->building_legality,
                    'roof_condition' => $request->roof_condition,
                    'wall_condition' => $request->wall_condition,
                    'floor_condition' => $request->floor_condition,
                    'certificate_of_domicile' => $filename_domicile,
                    'certificate_of_ownership' => $filename_ownership,
                    'statement_of_nodispute' => $filename_nodispute,
                    'statement_of_neverreceivedassistance' => $filename_neverreceivedassistance,
                    'statement_of_sellthehouse' => $filename_statement_of_sellthehouse,
                    'statement_of_incomebelowminimumwage' => $filename_statement_of_incomebelowminimumwage,
                    'status' => '2',
                ]);
            }
            DB::commit();
            Flasher::addSuccess('Pengajuan berhasil diajukan, silahkan menunggu proses verifikasi.');
            return redirect()->route('pengajuan');
        } catch (ValidationException $e) {
            DB::rollback();
            $allErrors = [];
            foreach ($e->errors() as $field => $msgs) {
                $allErrors = array_merge($allErrors, $msgs);
            }
            $errorString = implode(' | ', $allErrors);
            Flasher::addError('Terdapat error pada : ' . $errorString);
            return redirect()->route('formulir_pengajuan');
        } catch (Throwable $e) {
            DB::rollback();
            Flasher::addError('Terdapat error pada : ' . $e->getMessage());
            return redirect()->route('pengajuan');
        }
    }

    public function detail()
    {
        $submissions = Submission::where('user_id', Auth::user()->id)->firstOrFail();

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

        $documents = [];
        $pathcertificate_of_domicile = 'sertifikat_domisili/' . $submissions->certificate_of_domicile;
        $pathcertificate_of_ownership = 'sertifikat_hak_milik/' . $submissions->certificate_of_ownership;
        $pathstatement_of_nodispute = 'pernyataan_tidak_sengketa/' . $submissions->statement_of_nodispute;
        $pathstatement_of_neverreceivedassistance = 'pernyataan_tidak_bantuan/' . $submissions->statement_of_neverreceivedassistance;
        $pathstatement_of_sellthehouse = 'pernyataan_tidak_menjual_rumah/' . $submissions->statement_of_sellthehouse;
        $pathstatement_of_incomebelowminimumwage = 'pernyataan_pendapatan_dibawah_umk/' . $submissions->statement_of_incomebelowminimumwage;

        if (Storage::disk('public')->exists($pathcertificate_of_domicile)) {
            $documents['certificate_of_domicile'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathcertificate_of_domicile)) . '" download="Keterangan_Domilisi.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Keterangan Domisili Anda
            </a>';
        } else {
            $documents['certificate_of_domicile'] = '<p>Tidak ada dokumen.</p>';
        }

        if (Storage::disk('public')->exists($pathcertificate_of_ownership)) {
            $documents['certificate_of_ownership'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathcertificate_of_ownership)) . '" download="Keterangan_Hak_Milik.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Keterangan Hak Milik Anda
            </a>';
        } else {
            $documents['certificate_of_ownership'] = '<p>Tidak ada dokumen.</p>';
        }

        if (Storage::disk('public')->exists($pathstatement_of_nodispute)) {
            $documents['statement_of_nodispute'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathstatement_of_nodispute)) . '" download="Pernyataan_Rumah_Tidak_Sengketa.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Pernyataan Anda Bahwa Rumah Tidak Dalam Sengketa
            </a>';
        } else {
            $documents['statement_of_nodispute'] = '<p>Tidak ada dokumen.</p>';
        }

        if (Storage::disk('public')->exists($pathstatement_of_neverreceivedassistance)) {
            $documents['statement_of_neverreceivedassistance'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathstatement_of_neverreceivedassistance)) . '" download="Pernyataan_Belum_Menerima_Rutilahu.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Pernyataan Anda Bahwa Belum Pernah Menerima Bantuan Rutilahu
            </a>';
        } else {
            $documents['statement_of_neverreceivedassistance'] = '<p>Tidak ada dokumen.</p>';
        }

        if (Storage::disk('public')->exists($pathstatement_of_sellthehouse)) {
            $documents['statement_of_sellthehouse'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathstatement_of_sellthehouse)) . '" download="Pernyataan_Tidak_Menjual_Rumah.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Pernyataan Anda Bahwa Tidak Menjual Rumah Dalam Kurun Waktu 5 (lima) Tahun
            </a>';
        } else {
            $documents['statement_of_sellthehouse'] = '<p>Tidak ada dokumen.</p>';
        }

        if (Storage::disk('public')->exists($pathstatement_of_incomebelowminimumwage)) {
            $documents['statement_of_incomebelowminimumwage'] = '
            <a class="ms-3" href="data:application/pdf;base64,' . base64_encode(Storage::disk('public')->get($pathstatement_of_incomebelowminimumwage)) . '" download="Pernyataan_Pendapatan_Dibawah_UMK.pdf">
                <span class="iconify" style="cursor: pointer;" data-icon="mdi:download"
                    data-width="20" data-height="20"></span>
                Download Surat Pernyataan Anda Bahwa Pendapatan Dibawah UMK
            </a>';
        } else {
            $documents['statement_of_incomebelowminimumwage'] = '<p>Tidak ada dokumen.</p>';
        }

        return view('page.submission.detail', compact('Legalitas', 'Katap', 'Kdinding', 'Klantai', 'submissions', 'documents'));
    }
}
