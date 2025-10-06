<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\RTRW;
use App\Models\Survey;
use App\Models\Submission;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class RTRWController extends Controller
{
    public function index()
    {
        $informations = Information::orderBy('created_at', 'desc')->get();
        // ->map(function ($item) {
        //     // if ($item->foto && Storage::exists($item->foto)) {
        //     //     $path = Storage::path($item->foto); // ambil path file
        //     //     $type = pathinfo($path, PATHINFO_EXTENSION); // ambil ekstensi
        //     //     $data = file_get_contents($path); // baca isi file
        //     //     $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        //     //     $item->foto_base64 = $base64; // tambahkan property baru
        //     // } else {
        //     //     $item->foto_base64 = null; // kalau tidak ada foto
        //     // }
        //     // return $item;
        // });  
        $position = RTRW::where('user_id', Auth::user()->id)->first();

        $submissions = null;
        if ($position->status === 'RT') {
            $submissions = Submission::with('user')
                ->where('status', 2)->where('no_rt', $position->number)->where('no_rw', $position->parent)
                ->get();
        } else {
            $submissions = Submission::with('user')
                ->where('status', 4)->where('no_rw', $position->number)
                ->get();
        }

        return view('page.dashboard.rtrw', compact('informations', 'position', 'submissions'));
    }

    public function detail($id)
    {
        $id_DC = Crypt::decrypt($id);
        $submission = Submission::with('user')->where('id', $id_DC)->firstOrFail();
        $rtrw = null;
        if (Auth::user()->role !== 'admin99') {
            $rtrw = RTRW::where('user_id', Auth::user()->id)->firstOrFail();
            if ($rtrw->status === "RT") {
                if ($rtrw->number !== $submission->no_rt) {
                    return abort(404);
                }

                if ($rtrw->parent !== $submission->no_rw) {
                    return abort(404);
                }
            } else {
                if ($rtrw->number !== $submission->no_rw) {
                    return abort(404);
                }
            }
        }

        $surveys = Survey::where('submission_id', $id_DC)->get();
        $photosBase64 = [];

        if ($surveys->isEmpty()) {
            Flasher::addError('Data foto survey tidak ditemukan.');
        } else {
            foreach ($surveys as $survey) {
                $filename = $survey->picname;
                $filePath = 'file_foto_survey/' . $survey->submission_id . '/' . $filename;
                $base64Data = null;
                $mimeType = null;
                if (Storage::disk('public')->exists($filePath)) {
                    $fileContents = Storage::disk('public')->get($filePath);
                    $mimeType = Storage::disk('public')->mimeType($filePath);
                    $base64Data = base64_encode($fileContents);
                }

                $photosBase64[] = [
                    'id' => $survey->id,
                    'submission_id' => $survey->submission_id,
                    'picname' => $filename,
                    'mime_type' => $mimeType,
                    'base64_src' => $base64Data ? "data:{$mimeType};base64,{$base64Data}" : null,
                    'is_found' => (bool)$base64Data
                ];
            }
        }

        return view('page.submission.detail_admin', compact('submission', 'rtrw', 'photosBase64'));
    }

    public function update($id)
    {
        $id_DC = Crypt::decrypt($id);
        $submission = Submission::where('id', $id_DC)->first();
        $position = RTRW::where('user_id', Auth::user()->id)->first();

        try {
            DB::beginTransaction();

            if (Auth::user()->role !== 'admin99') {
                if ($position->status === 'RT') {
                    $submission->update([
                        'status' => 4
                    ]);
                } else {
                    $submission->update([
                        'status' => 6
                    ]);
                }
            } else {
                $submission->update([
                    'status' => 8
                ]);
            }

            DB::commit();
            Flasher::addSuccess('Pengajuan berhasil disetujui.');

            if (Auth::user()->role !== 'admin99') {
                if ($position->status === 'RT') {
                    return redirect(route('RT.dashboard_rt'));
                } else {
                    return redirect(route('RW.dashboard_rw'));
                }
            } else {
                return redirect(route('admin.dashboard_admin'));
            }
        } catch (Exception $e) {
            DB::rollBack();
            Flasher::addError('Terdapat Error Inputan : ' . $e->getMessage());
        }
    }
}
