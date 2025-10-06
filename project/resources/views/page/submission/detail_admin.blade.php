@extends('layouts.admin')

@section('content')
    <div class="card">
        @if (Auth::user()->role === 'admin99')
            <div class="card-header">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2">
                    <a href="javascript:void(0)"
                        class="btn btn-sm btn-primary-600 radius-8 d-inline-flex align-items-center gap-1">
                        <iconify-icon icon="pepicons-pencil:paper-plane" class="text-xl"></iconify-icon>
                        Send Invoice
                    </a>
                    <a href="javascript:void(0)"
                        class="btn btn-sm btn-warning radius-8 d-inline-flex align-items-center gap-1">
                        <iconify-icon icon="solar:download-linear" class="text-xl"></iconify-icon>
                        Download
                    </a>
                    <a href="javascript:void(0)"
                        class="btn btn-sm btn-success radius-8 d-inline-flex align-items-center gap-1">
                        <iconify-icon icon="uil:edit" class="text-xl"></iconify-icon>
                        Edit
                    </a>
                    <button type="button" class="btn btn-sm btn-danger radius-8 d-inline-flex align-items-center gap-1"
                        onclick="printInvoice()">
                        <iconify-icon icon="basil:printer-outline" class="text-xl"></iconify-icon>
                        Print
                    </button>
                </div>
            </div>
        @endif

        <div class="card-body py-40">
            <div class="row justify-content-center" id="invoice">
                <div class="col-lg-12">
                    <div>
                        <div class="p-20 d-flex flex-wrap justify-content-between gap-3 border-bottom">
                            <div>
                                <h3 class="text-xl">Pengajuan #{{ $submission->submission_id }}</h3>
                                <p class="mb-1 text-sm">Diajukan Tanggal:
                                    {{ \Carbon\Carbon::parse($submission->created_at)->translatedFormat('d/m/Y - H:i') }}
                                </p>
                                @if (Auth::user()->role !== 'admin99')
                                    @if ($rtrw->status === 'RW')
                                        <p class="mb-1 text-sm">Disetujui Oleh RT
                                            {{ str_pad($submission->no_rt, 2, '0', STR_PAD_LEFT) }} Tanggal:
                                            {{ \Carbon\Carbon::parse($submission->updated_at)->translatedFormat('d/m/Y - H:i') }}
                                        </p>
                                    @endif
                                @else
                                    <p class="mb-1 text-sm">Disetujui Oleh RT
                                        {{ str_pad($submission->no_rt, 2, '0', STR_PAD_LEFT) }} dan RW
                                        {{ str_pad($submission->no_rw, 2, '0', STR_PAD_LEFT) }} Tanggal:
                                        {{ \Carbon\Carbon::parse($submission->updated_at)->translatedFormat('d/m/Y - H:i') }}
                                    </p>
                                @endif

                            </div>
                            <div>
                                {{-- <img src="assets/images/logo.png" alt="image" class="mb-8"> --}}
                                <p class="mb-1 text-sm">Bubutan V / 19, Surabaya, Jawa Timur, Indonesia.</p>
                                <p class="mb-0 text-sm">kelurahan.alun2contong@gmail.com, (031) 5320192</p>
                            </div>
                        </div>
                        <div class="py-28 px-20">
                            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">
                                <div>
                                    <h6 class="text-md">Diajukan Oleh:</h6>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td class="ps-8">: {{ $submission->user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Domisili</td>
                                                <td class="ps-8">: {{ $submission->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. Telepon</td>
                                                <td class="ps-8">: {{ $submission->user->phone }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Alamat KK</td>
                                                <td class="ps-8">: {{ $submission->user->regency }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. RW</td>
                                                <td class="ps-8">:
                                                    {{ str_pad($submission->no_rw, 2, '0', STR_PAD_LEFT) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>No. RT</td>
                                                <td class="ps-8">:
                                                    {{ str_pad($submission->no_rt, 2, '0', STR_PAD_LEFT) }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="mt-24">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table text-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-sm">No.</th>
                                                <th scope="col" class="text-sm">Kriteria</th>
                                                <th scope="col" class="text-sm">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Penghasilan</td>
                                                <td>
                                                    {{ 'Rp ' . number_format($submission->revenue, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Asset</td>
                                                <td>
                                                    {{ 'Rp ' . number_format($submission->asset, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tanggungan Angota Keluarga</td>
                                                <td>
                                                    {{ $submission->dependents }} Orang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Luas Bangunan</td>
                                                <td>
                                                    {{ $submission->building_area }} m<sup>2</sup>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Legalitas Bangunan</td>
                                                <td>
                                                    {!! \App\Helpers\PengajuanStatusHelper::Legality($submission->building_legality) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Kondisi Atap Bangunan</td>
                                                <td>
                                                    {!! \App\Helpers\PengajuanStatusHelper::Roof($submission->roof_condition) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Kondisi Dinding Bangunan</td>
                                                <td>
                                                    {!! \App\Helpers\PengajuanStatusHelper::Wall($submission->wall_condition) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Kondisi Lantai Bangunan</td>
                                                <td>
                                                    {!! \App\Helpers\PengajuanStatusHelper::Floor($submission->floor_condition) !!} <br>
                                                    @if (in_array($submission->floor_condition, [3, 4]))
                                                        <small class="text-primary">Lantai rendah adalah kondisi dimana
                                                            lantai
                                                            terlihat tidak rata/
                                                            bergelombang, <br> berpotensi terendam banjir, dan berada
                                                            dibawah
                                                            ketinggian jalan.</small>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="p-20 border-top">
                            <div>
                                <h3 class="text-xl">Dokumen Terkait</h3>
                            </div>
                            <ul class="list-decimal ps-20">
                                <li class="text-secondary-light mb-8">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->certificate_of_domicile, 'code' => 1]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Surat Keterangan Domisili
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-secondary-light mb-8">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->certificate_of_ownership, 'code' => 2]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Serfikat Legalitas Bangunan
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-secondary-light mb-8">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->statement_of_nodispute, 'code' => 3]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Surat Pernyataan (bermaterai) rumah/tanah tidak dalam
                                            sengketa
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-secondary-light mb-8">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->statement_of_neverreceivedassistance, 'code' => 4]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Surat Pernyataan (bermaterai) belum pernah menerima
                                            bantuan perbaikan rumah
                                            dari Pemerintah
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-secondary-light">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->statement_of_sellthehouse, 'code' => 5]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Surat Pernyataan (bermaterai) kesediaan tidak menjual atau
                                            menyewakan rumah
                                            hasil rehabilitasi dalam kurun waktu 5 (lima) Tahun
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-secondary-light">
                                    <a href="{{ route('blank_pdf', ['filename' => $submission->statement_of_incomebelowminimumwage, 'code' => 6]) }}"
                                        class="text-hover-primary-600 transition-2 d-flex align-items-center"
                                        target="_blank">
                                        <div>
                                            Surat Pernyataan (bermaterai) pendapatan keluarga dibawah
                                            UMK
                                            <span class="iconify ms-2" data-icon="mdi:folder-open"
                                                style="width: 24px; height: 24px;"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card h-100 p-0 mt-3">
        @if ($submission->status === 8)
            <div class="card-header border-bottom bg-base py-16 px-24">
                <h6 class="text-lg fw-semibold mb-0">Upload Foto Survey</h6>
            </div>
        @else
            <div class="card-header border-bottom bg-base py-16 px-24">
                <h6 class="text-lg fw-semibold mb-0">Verifikasi Pengajuaan</h6>
            </div>
        @endif

        <div class="card-body p-24">
            @if ($submission->status === 8)
                <label for="file-upload-name"
                    class="mb-16 border border-neutral-600 fw-medium text-secondary-light px-16 py-12 radius-12 d-inline-flex align-items-center gap-2 bg-hover-neutral-200">
                    <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                    Click untuk unggah
                    <form id="uploadForm" action="{{ route('admin.upload_survey', Crypt::encrypt($submission->id)) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="picsurvey[]" class="form-control w-auto mt-24 form-control-lg"
                            id="file-upload-name" accept=".jpg, .jpeg, .png, image/jpeg, image/png" multiple hidden>
                    </form>
                </label>

                <div>
                    <h6 class="text-lg fw-semibold mb-0 mt-3" id="foto">#Data Foto</h6>
                </div>
                <div class="mt-2">
                    @forelse ($photosBase64 as $item)
                        @if ($item['is_found'] && $item['base64_src'])
                            <div class="d-inline-block text-center m-2">
                                <a class="d-block mt-2" data-fancybox="gallery" data-src="{{ $item['base64_src'] }}">
                                    <img src="{{ $item['base64_src'] }}" width="100" height="150"
                                        alt="Thumbnail Foto" style="border-radius: 6px; cursor: pointer;" />
                                </a>
                                <form action="{{ route('admin.destroy_survey', Crypt::encrypt($item['id'])) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-outline-danger-600 radius-8 px-14 py-6 mt-3 text-sm delete"
                                        name="submit" value="{{ Crypt::encrypt($item['id']) }}">Hapus
                                    </button>
                                </form>
                            </div>
                        @endif
                    @empty
                        Tidak ada foto.
                    @endforelse
                </div>
            @else
                <form action="{{ route('update_pengajuan_RT', Crypt::encrypt($submission->id)) }}" method="POST">
                    @csrf
                    <button type="button"
                        class="btn btn-outline-danger-600 radius-8 px-20 py-11 me-1 tolak">Tolak</button>
                    <button type="submit" class="btn btn-primary-600 radius-8 px-20 py-11 ms-1">Setujui</button>
                </form>
            @endif
        </div>
        <div class="card-footer text-end">
            <button type="button" class="btn btn-danger-600 radius-8 px-20 py-11 me-1" onclick="window.history.back();">
                Kembali
            </button>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
    <style>
        .sf-title {
            font-size: 1.75em !important;
            font-weight: bold !important;
            margin: 0 !important;
        }
    </style>
@endsection

@section('script')
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.js"></script>

    @if ($submission->status === 8)
        <script>
            Fancybox.bind("[data-fancybox]", {});

            $(document).ready(function() {
                $('#file-upload-name').on('change', function() {
                    $('#uploadForm').submit();
                });
            });
        </script>
    @else
        <script>
            $(document).on('click', '.tolak', function() {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data ini akan ditolak!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Tolak!',
                    cancelButtonText: 'Batal',
                    customClass: {
                        title: 'sf-title',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Ditolak!',
                            'Data berhasil ditolak.',
                            'success'
                        )
                    }
                });
            });
        </script>
    @endif
@endsection
