@extends('layouts.admin')
@section('title', 'Daftar Batch Penerimaan')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Detail Batch Penerimaan - {{ $batch->name }}</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">
                <a href="{{ route('admin.batch.submission_batch_admin') }}"
                    class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Daftar Batch Penerimaan
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">{{ $batch->name }}</li>
        </ul>
    </div>
    <div class="card basic-data-table mt-3">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Data Batch Penerimaan - {{ $batch->name }}</h5>
                <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11" data-bs-toggle="modal"
                    data-bs-target="#adddata">
                    Tambah Data
                </button>
                <div class="modal fade" id="adddata" tabindex="-1" aria-labelledby="adddataLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                    <h5 class="modal-title" id="adddataLabel">Tambah Data</h5>
                                    <small class="p-0 m-0 fst-italic"><span style="color: red;"
                                            class="p-0 m-0">*</span>Menandakan
                                        bahwa kolom ini wajib diisi atau
                                        dipilih.</small>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div>
                                        <label class="form-label">Pilih Pengajuan<span style="color: red;"
                                                class="p-0 m-0">*</span> <small>(bisa lebih dari 1)</small></label>
                                        <select name="submission[]" id="submission" style="width: 100%" multiple="multiple">
                                            @foreach ($prospectivesubmissions as $prospectivesubmissions)
                                                <option value="{{ $prospectivesubmissions->id }}">
                                                    {{ $prospectivesubmissions->user->name }} -
                                                    {{ $prospectivesubmissions->submission_id }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="datatable-scroll">
                <table class="table bordered-table mb-0" id="batchTable" style="table-layout: fixed; width: 100%;">
                    <thead>
                        <tr>
                            <th style="text-align: center">Nomor Pengajuan</th>
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center">Alamat</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($batchitems as $batchitem)
                            <tr>
                                <td style="text-align: center">{{ $batchitem->submission->submission_id }}</td>
                                <td style="text-align: center">{{ $batchitem->submission->user->name }}</td>
                                <td style="text-align: center">{{ $batchitem->submission->address }}</td>
                                <td style="text-align: center">
                                    <button type="button"
                                        class="btn btn-outline-danger-600 radius-8 px-14 py-6 text-sm">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="button" class="btn btn-danger-600 radius-8 px-20 py-11 me-1" onclick="window.history.back();">
                Kembali
            </button>
        </div>
    </div>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        #batchTable {
            table-layout: fixed;
            width: 100%;
            min-width: 700px;
            /* opsional, biar scrollbar muncul */
            border-collapse: collapse;
        }

        #batchTable td,
        #batchTable th,
        table.dataTable td,
        table.dataTable th {
            white-space: normal !important;
            word-break: break-word !important;
            overflow-wrap: anywhere !important;
        }

        #batchTable td div {
            white-space: normal !important;
        }

        table.dataTable td span,
        #batchTable td span {
            display: inline-block;
            /* atau block */
            width: 100%;
            /* isi penuh kolom */
            white-space: normal !important;
            word-break: break-word;
            overflow-wrap: anywhere;
            text-align: center;
            /* kalau ingin rata tengah seperti badge */
        }

        /* Biar hanya isi tabel yang bisa scroll */
        .datatable-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Scrollbar tampil rapi */
        .datatable-scroll::-webkit-scrollbar {
            height: 8px;
        }

        .datatable-scroll::-webkit-scrollbar-thumb {
            background-color: #bbb;
            border-radius: 10px;
        }

        .datatable-scroll::-webkit-scrollbar-thumb:hover {
            background-color: #999;
        }

        @media (max-width: 768px) {
            .datatable-scroll {
                overflow-x: auto;
            }
        }

        .select2-container--open {
            /* Nilai 2000 jauh di atas z-index Modal (biasanya 1050 atau 1060) */
            z-index: 2000 !important;
        }

        .select2-container .selection {
            width: 100%
        }

        .select2-selection .select2-selection--single {
            width: 100%
        }

        .select2-selection .select2-selection--multiple {
            width: 100%
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container .select2-selection--single {
            height: calc(2.5rem + 2px);
            display: flex;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .select2-container .select2-selection--multiple {
            display: flex;
            align-items: center;
            padding: 0.375rem 0;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .select2-container .select2-selection__rendered {
            padding-left: 0.75rem;
            line-height: normal !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            position: absolute;
            top: 0;
            /* reset bawaan */
            bottom: 0;
            /* biar full tinggi */
            right: 0.75rem;
            /* geser sedikit dari kanan */
            width: 20px;
            height: auto;
            /* biar ikut tinggi parent */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__arrow {
            position: absolute;
            top: 0;
            /* reset bawaan */
            bottom: 0;
            /* biar full tinggi */
            right: 0.75rem;
            /* geser sedikit dari kanan */
            width: 20px;
            height: auto;
            /* biar ikut tinggi parent */
            display: flex;
            align-items: center;
            justify-content: center;
        }
/* 
        1. Atur Tinggi Minimum untuk Kotak Pilihan Multiple */
        .select2-container .select2-selection--multiple {
            min-height: 40px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            background-color: #fff;
        }

        /* 2. Atur Padding di Dalam Kotak */
        .select2-container .select2-selection--multiple .select2-selection__rendered {
            padding: 0.375rem 0.75rem;
        }

        /* 3. Atur Posisi Tag (Pilihan yang Sudah Terpilih) */
        .select2-container .select2-selection--multiple .select2-selection__choice {
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
        }

        /* 4. Atur Input Pencarian */
        .select2-container .select2-search--inline .select2-search__field {
            /* Berikan tinggi minimum agar kursor terlihat rapi */
            min-height: 25px;
            /* Sesuaikan margin agar input pencarian rapi di baris pertama */
            margin-top: 0;
        }
    </style>
@endsection

@section('script')
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submission').select2({
                dropdownParent: $('#adddata'),
                placeholder: '-- Pilih Pengajuan --',
                allowClear: true
            });
        });

        let batchTable = new DataTable('#batchTable', {
            responsive: true,
            autoWidth: false,
            order: [],
            language: {
                emptyTable: "Tidak ada data yang tersedia di tabel",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
                infoFiltered: "(disaring dari total _MAX_ data)",
                lengthMenu: "Tampilkan _MENU_ data",
                loadingRecords: "Memuat...",
                processing: "Sedang memproses...",
                search: "Cari:",
                zeroRecords: "Tidak ada data yang cocok ditemukan",
            },
            columnDefs: [{
                    targets: [0],
                    searchable: true,
                    orderable: true
                },
                {
                    targets: [1],
                    searchable: true,
                    orderable: true
                },
                {
                    targets: [2],
                    searchable: true,
                    orderable: true
                },
                {
                    targets: [3],
                    searchable: true,
                    orderable: true
                },
            ]
        });
    </script>
@endsection
