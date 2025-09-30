<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\InformationAttachment;
use Throwable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Laravel\Facade\Flasher;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class InformationController extends Controller
{
    private function generateUniqueSlug($title)
    {
        $slug = Str::slug($title, '-');

        $randomCode = Str::lower(Str::random(5));
        $slug = $slug . '-' . $randomCode;

        $originalSlug = $slug;
        $count = 1;

        while (Information::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    public function index()
    {
        $informasi = Information::all()->map(function ($item) {
            $pathCK = 'informasi_coverkecil/' . $item->small_thumbnail;

            if (Storage::disk('public')->exists($pathCK)) {
                $item->imagesmall = base64_encode(Storage::disk('public')->get($pathCK));
            } else {
                $item->imagesmall = 'https://images.pexels.com/photos/242492/pexels-photo-242492.jpeg';
            }

            return $item;
        });

        return view('page.information.index', compact('informasi'));
    }

    public function detail($id)
    {
        $informasi = Information::where('slug', $id)->firstOrFail();

        if ($informasi) {
            $pathCB = 'informasi_coverbesar/' . $informasi->big_thumbnail;

            if (Storage::disk('public')->exists($pathCB)) {
                $informasi->imagebig = base64_encode(Storage::disk('public')->get($pathCB));
            } else {
                $informasi->imagebig = 'https://images.pexels.com/photos/242492/pexels-photo-242492.jpeg';
            }
        }

        $attachments = InformationAttachment::where('information_id', $informasi->id)->get();
        $files = [];
        if ($attachments) {
            foreach ($attachments as $att) {
                $pathATT = 'informasi_lampiran/' . $att->filename;

                if (Storage::disk('public')->exists($pathATT)) {
                    $files[] = [
                        'name' => $att->filename,
                        'file' => base64_encode(Storage::disk('public')->get($pathATT))
                    ];
                }
            }
        }

        return view('page.information.detail', compact('informasi', 'files'));
        // return view('page.information.detail', compact('informasi'));
    }

    public function list_information()
    {
        $informasi = Information::all()->map(function ($item) {
            $pathCK = 'informasi_coverkecil/' . $item->small_thumbnail;

            if (Storage::disk('public')->exists($pathCK)) {
                $item->imagesmall = base64_encode(Storage::disk('public')->get($pathCK));
            } else {
                $item->imagesmall = 'https://images.pexels.com/photos/242492/pexels-photo-242492.jpeg';
            }

            return $item;
        });

        // return view('page.admin.list_information', compact('informasi'));
        return view('page.information.list', compact('informasi'));
    }

    public function create_information()
    {
        $id = null;
        $udd = null;
        return view('page.admin.create_information', compact('id', 'udd'));
    }

    public function edit_information($id)
    {
        $id_DC = Crypt::decrypt($id);
        $informasi = Information::where('id', $id_DC)->firstOrFail();

        if ($informasi) {
            $pathCK = 'informasi_coverkecil/' . $informasi->small_thumbnail;
            $pathCB = 'informasi_coverbesar/' . $informasi->big_thumbnail;

            if (Storage::disk('public')->exists($pathCB)) {
                $informasi->imagebig = base64_encode(Storage::disk('public')->get($pathCB));
                $informasi->imagesmall = base64_encode(Storage::disk('public')->get($pathCK));
            } else {
                $informasi->imagebig = 'https://images.pexels.com/photos/242492/pexels-photo-242492.jpeg';
                $informasi->imagesmall = 'https://images.pexels.com/photos/242492/pexels-photo-242492.jpeg';
            }
        }

        $attachments = InformationAttachment::where('information_id', $informasi->id)->get();
        $files = [];
        if ($attachments) {
            foreach ($attachments as $att) {
                $pathATT = 'informasi_lampiran/' . $att->filename;

                if (Storage::disk('public')->exists($pathATT)) {
                    $files[] = [
                        'name' => $att->filename,
                        'file' => base64_encode(Storage::disk('public')->get($pathATT))
                    ];
                }
            }
        }

        $edit = true;
        $udd = Crypt::encrypt('delete999');
        return view('page.admin.create_information', compact('informasi', 'edit', 'files', 'id', 'udd'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'judulInformasi' => 'required',
                'isiInformasi' => 'required',
                'coverKecil' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:width=370,height=270',
                'coverBesar' => 'required|mimes:jpeg,png,jpg|max:2048|dimensions:width=1540,height=820',
                'lampiran' => 'sometimes|required|array',
                'lampiran.*' => 'required|mimes:pdf|max:2048',
            ], [

                'judulInformasi.required' => 'Judul Informasi wajib diisi!',
                'isiInformasi.required' => 'Isi Informasi wajib diisi!',
                'coverKecil.required' => 'Foto Depan Kecil wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
                'coverKecil.mimes' => 'Foto Depan Kecil wajib berupa gambar dengan format jpeg, png, jpg!',
                'coverKecil.max' => 'Foto Depan Kecil tidak boleh lebih dari 2048 KB!',
                'coverKecil.dimensions' => 'Foto Depan Kecil wajib memiliki dimensi 370 x 270 pixels!',
                'coverBesar.required' => 'Foto Dalam Besar wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
                'coverBesar.mimes' => 'Foto Dalam Besar wajib berupa gambar dengan format jpeg, png, jpg!',
                'coverBesar.max' => 'Foto Dalam Besar tidak boleh lebih dari 2048 KB!',
                'coverBesar.dimensions' => 'Foto Dalam Besar wajib memiliki dimensi 1540 x 820 pixels!',
                'lampiran.required' => 'Lampiran kosong atau file tidak sah!',
                'lampiran.array'    => 'Format lampiran tidak valid.',
                'lampiran.*.required' => 'Form lampiran wajib diisi semua!',
                'lampiran.*.mimes' => 'Lampiran wajib berupa file dengan format pdf!',
            ]);

            DB::beginTransaction();

            $information = Information::create([
                'title' => Str::title($request->judulInformasi),
                'slug' => $this->generateUniqueSlug($request->judulInformasi),
                'body' => $request->isiInformasi,
                'small_thumbnail' => 'none',
                'big_thumbnail' => 'none',
            ]);

            if ($request->hasFile('coverKecil') && $request->hasFile('coverBesar')) {
                $coverKecil = $request->file('coverKecil');
                $CoverBesar = $request->file('coverBesar');
                $filename_coverKecil = Str::uuid() . '.' . $coverKecil->getClientOriginalExtension();
                $filename_CoverBesar = Str::uuid() . '.' . $CoverBesar->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('informasi_coverkecil', $coverKecil, $filename_coverKecil);
                Storage::disk('public')->putFileAs('informasi_coverbesar', $CoverBesar, $filename_CoverBesar);

                $information->update([
                    'small_thumbnail' => $filename_coverKecil,
                    'big_thumbnail' => $filename_CoverBesar,
                ]);

                if ($request->hasFile('lampiran')) {
                    foreach ($request->file('lampiran') as $file) {
                        $filename_lampiran = $file->getClientOriginalName();
                        Storage::disk('public')->putFileAs('informasi_lampiran', $file, $filename_lampiran);

                        $attachment = InformationAttachment::create([
                            'information_id' => $information->id,
                            'filename' => $filename_lampiran,
                        ]);
                    }
                }
            } else {
                throw new \Exception("Foto Foto Depan Kecil dan Foto Dalam Besar wajib diupload!");
            }

            DB::commit();

            Flasher::addSuccess('Informasi baru berhasil ditambahkan.');
            return response()->json(['status' => 1, 'message' => '',  'redirect' => route('admin.information.list_information')], 200);
        } catch (ValidationException $e) {
            DB::rollback();
            $allErrors = [];
            foreach ($e->errors() as $field => $msgs) {
                $allErrors = array_merge($allErrors, $msgs);
            }

            return response()->json([
                'status' => 0,
                'message' => implode('<br>', $allErrors),
            ], 422);
        } catch (Throwable $e) {
            DB::rollback();

            if (!empty($filename_coverKecil) && Storage::disk('public')->exists('informasi_coverkecil/' . $filename_coverKecil)) {
                Storage::disk('public')->delete('informasi_coverkecil/' . $filename_coverKecil);
            }
            if (!empty($filename_CoverBesar) && Storage::disk('public')->exists('informasi_coverbesar/' . $filename_CoverBesar)) {
                Storage::disk('public')->delete('informasi_coverbesar/' . $filename_CoverBesar);
            }
            if (!empty($filename_lampiran) && Storage::disk('public')->exists('informasi_lampiran/' . $filename_lampiran)) {
                Storage::disk('public')->delete('informasi_lampiran/' . $filename_lampiran);
            }

            return response()->json(['status' => 0, 'message' => $e->getMessage()], 442);
        }
    }

    public function destroy_information(Request $request)
    {
        try {
            DB::beginTransaction();
            $enc_DC = Crypt::decrypt($request->enc);
            $type_DC = Crypt::decrypt($request->type);
            $attachment1 = InformationAttachment::where('information_id', $enc_DC)
                ->where('filename', $type_DC)
                ->firstOrFail();

            if ($attachment1) {
                // Storage::disk('public')->delete('informasi_lampiran/' . $attachment->filename);
                $attachment1->delete();

                $attachments = InformationAttachment::where('information_id', $enc_DC)->get();
                $data = $attachments->map(function ($f) use ($request) {
                    $pathATT = 'informasi_lampiran/' . $f->filename;
                    if (Storage::disk('public')->exists($pathATT)) {
                        return [
                            'name' => $f->filename,
                            'enc'  => Crypt::encrypt($f->information_id),
                            'type' => Crypt::encrypt($f->filename),
                            'file' => base64_encode(Storage::disk('public')->get($pathATT))
                        ];
                    }
                });

                $information = Information::where('id', $enc_DC)->firstOrFail();
                $information->touch();
            }
            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
            return response()->json(['status' => 0, 'message' => $e->getMessage()], 442);
        }
        return response()->json(['status' => 1, 'data' => $data], 200);
    }

    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();
            $enc_DC = Crypt::decrypt($request->enc);
            $type_DC = Crypt::decrypt($request->type);

            $information = Information::findOrFail($enc_DC);
            $information->attachment()->delete();
            $information->delete();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollback();
            return response()->json(['status' => 0, 'message' => $e->getMessage()], 442);
        }

        Flasher::addSuccess('Informasi berhasil dihapus.');
        return response()->json(['status' => 1, 'redirect' => route('admin.information.list_information')], 200);
    }

    public function update_information(Request $request, $id)
    {
        try {
            $id_DC = Crypt::decrypt($id);
            $request->validate([
                'judulInformasi' => 'required',
                'isiInformasi' => 'required',
                'coverKecil' => 'sometimes|required|mimes:jpeg,png,jpg|max:2048|dimensions:width=370,height=270',
                'coverBesar' => 'sometimes|required|mimes:jpeg,png,jpg|max:2048|dimensions:width=1540,height=820',
                'lampiran' => 'sometimes|required|array',
                'lampiran.*' => 'required|mimes:pdf|max:2048',
            ], [

                'judulInformasi.required' => 'Judul Informasi wajib diisi!',
                'isiInformasi.required' => 'Isi Informasi wajib diisi!',
                'coverKecil.required' => 'Foto Depan Kecil wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
                'coverKecil.mimes' => 'Foto Depan Kecil wajib berupa gambar dengan format jpeg, png, jpg!',
                'coverKecil.max' => 'Foto Depan Kecil tidak boleh lebih dari 2048 KB!',
                'coverKecil.dimensions' => 'Foto Depan Kecil wajib memiliki dimensi 370 x 270 pixels!',
                'coverBesar.required' => 'Foto Dalam Besar wajib diisi dan harus berupa gambar dengan format jpeg, png, jpg dan maksimal ukuran 2MB!',
                'coverBesar.mimes' => 'Foto Dalam Besar wajib berupa gambar dengan format jpeg, png, jpg!',
                'coverBesar.max' => 'Foto Dalam Besar tidak boleh lebih dari 2048 KB!',
                'coverBesar.dimensions' => 'Foto Dalam Kecil wajib memiliki dimensi 1540 x 820 pixels!',
                'lampiran.required' => 'Lampiran kosong atau file tidak sah!',
                'lampiran.array'    => 'Format lampiran tidak valid.',
                'lampiran.*.required' => 'Form lampiran wajib diisi semua!',
                'lampiran.*.mimes' => 'Lampiran wajib berupa file dengan format pdf!',
            ]);

            DB::beginTransaction();

            $information = Information::where('id', $id_DC)->firstOrFail();



            if ($request->judulInformasi === $information->title) {
                $information->update([
                    'title' => Str::title($request->judulInformasi),
                    'body' => $request->isiInformasi,
                ]);
            } else {
                $information->update([
                    'title' => Str::title($request->judulInformasi),
                    'slug' => $this->generateUniqueSlug($request->judulInformasi),
                    'body' => $request->isiInformasi,
                ]);
            }


            if ($request->hasFile('coverKecil')) {
                $coverKecil = $request->file('coverKecil');
                $filename_coverKecil = Str::uuid() . '.' . $coverKecil->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('informasi_coverkecil', $coverKecil, $filename_coverKecil);

                $information->update([
                    'small_thumbnail' => $filename_coverKecil,
                ]);
            }

            if ($request->hasFile('coverBesar')) {
                $CoverBesar = $request->file('coverBesar');
                $filename_CoverBesar = Str::uuid() . '.' . $CoverBesar->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('informasi_coverbesar', $CoverBesar, $filename_CoverBesar);

                $information->update([
                    'big_thumbnail' => $filename_CoverBesar,
                ]);
            }

            if ($request->hasFile('lampiran')) {
                foreach ($request->file('lampiran') as $file) {
                    $filename_lampiran = $file->getClientOriginalName();
                    Storage::disk('public')->putFileAs('informasi_lampiran', $file, $filename_lampiran);

                    $attachment = InformationAttachment::create([
                        'information_id' => $information->id,
                        'filename' => $filename_lampiran,
                    ]);
                    $information->touch();
                }
            }

            DB::commit();
            Flasher::addSuccess('Informasi berhasil diperbarui.');
            return response()->json(['status' => 1, 'message' => '',  'redirect' => route('admin.information.list_information')], 200);
        } catch (ValidationException $e) {
            $allErrors = [];
            foreach ($e->errors() as $field => $msgs) {
                $allErrors = array_merge($allErrors, $msgs);
            }

            return response()->json([
                'status' => 0,
                'message' => implode('<br>', $allErrors),
            ], 422);
        } catch (Throwable $e) {
            DB::rollback();

            if (!empty($filename_coverKecil) && Storage::disk('public')->exists('informasi_coverkecil/' . $filename_coverKecil)) {
                Storage::disk('public')->delete('informasi_coverkecil/' . $filename_coverKecil);
            }
            if (!empty($filename_CoverBesar) && Storage::disk('public')->exists('informasi_coverbesar/' . $filename_CoverBesar)) {
                Storage::disk('public')->delete('informasi_coverbesar/' . $filename_CoverBesar);
            }
            if (!empty($filename_lampiran) && Storage::disk('public')->exists('informasi_lampiran/' . $filename_lampiran)) {
                Storage::disk('public')->delete('informasi_lampiran/' . $filename_lampiran);
            }

            return response()->json(['status' => 0, 'message' => $e->getMessage()], 442);
        }
    }
}
