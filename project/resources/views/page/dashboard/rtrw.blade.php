@extends('layouts.admin')

@section('content')
    <div class="row gy-2">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-6">
                        @livewire('total-submission')
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-4">
                        @livewire('total-received')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24 mt-5">
        @if ($position->status === 'RT')
            <h6 class="fw-semibold mb-0">Pengajuan Warga RT {{ str_pad($position->number, 2, '0', STR_PAD_LEFT) }} RW
                {{ str_pad($position->parent, 2, '0', STR_PAD_LEFT) }}</h6>
        @else
            <h6 class="fw-semibold mb-0">Pengajuan Warga RW {{ str_pad($position->number, 2, '0', STR_PAD_LEFT) }}</h6>
        @endif
    </div>
    <div class="card basic-data-table mt-3">
        <div class="card-header">
            @if ($position->status === 'RT')
                <h5 class="card-title mb-0">Data Pengajuan Warga RT {{ str_pad($position->number, 2, '0', STR_PAD_LEFT) }}
                    RW
                    {{ str_pad($position->parent, 2, '0', STR_PAD_LEFT) }}</h5>
            @else
                <h5 class="card-title mb-0">Data Pengajuan Warga RW {{ str_pad($position->number, 2, '0', STR_PAD_LEFT) }}
                </h5>
            @endif
        </div>
        <div class="card-body">
            <div class="datatable-scroll">
                <table class="table bordered-table mb-0" id="submissions" style="table-layout: fixed; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:20%">ID Pengajuan</th>
                            <th style="width:30%">Nama</th>
                            <th style="width:35%">Alamat</th>
                            <th style="width:15%; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submissions as $submission)
                            <tr>
                                <td>{{ $submission->submission_id }}</td>
                                <td>{{ $submission->user->name }}</td>
                                <td>{{ $submission->address }}, RW {{ str_pad($submission->no_rw, 2, '0', STR_PAD_LEFT) }},
                                    RT {{ str_pad($submission->no_rt, 2, '0', STR_PAD_LEFT) }}</td>
                                <td style="text-align: center;">
                                    @if ($position->status === 'RT')
                                        <a href="{{ route('RT.detail_pengajuan', Crypt::encrypt($submission->id)) }}"
                                            class="btn btn-warning-600 radius-8 px-14 py-6 text-sm">Setujui</a>
                                    @else
                                        <a href="{{ route('RW.detail_pengajuan', Crypt::encrypt($submission->id)) }}"
                                            class="btn btn-warning-600 radius-8 px-14 py-6 text-sm">Setujui</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24 mt-5">
        <h6 class="fw-semibold mb-0">Informasi Terbaru</h6>
    </div>
    <div class="row gy-2">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                @foreach ($informations as $information)
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="card h-100 p-0 radius-12 overflow-hidden">
                            <div class="card-body p-24">
                                <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                    <img src="assets/images/blog/blog1.png" alt=""
                                        class="w-100 h-100 object-fit-cover">
                                </a>
                                <div class="mt-20">
                                    <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                        <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                            <i class="ri-calendar-2-line"></i>
                                            {{ \Carbon\Carbon::parse($information->updated_at)->translatedFormat('d M, Y') }}
                                        </div>
                                    </div>
                                    <h6 class="mb-16">
                                        <a href="blog-details.html"
                                            class="text-line-2 text-hover-primary-600 text-xl transition-2">{{ $information->title }}</a>
                                    </h6>
                                    <p class="text-line-3 text-neutral-500">
                                        {{ \Illuminate\Support\Str::words(
                                            preg_replace('/\s+/', ' ', html_entity_decode(preg_replace('/<[^>]+>/', ' ', $information->body))),
                                            20,
                                            '...',
                                        ) }}
                                    </p>
                                    <a href="blog-details.html"
                                        class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                        Baca Lebih Lanjut
                                        <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        #submissions,
        {
        table-layout: fixed;
        width: 100%;
        min-width: 700px;
        /* opsional, biar scrollbar muncul */
        border-collapse: collapse;
        }

        #submissions td,
        #submissions th,
        table.dataTable td,
        table.dataTable th {
            white-space: normal !important;
            word-break: break-word !important;
            overflow-wrap: anywhere !important;
        }

        #submissions td div,
        {
        white-space: normal !important;
        }

        table.dataTable td span,
        #submissions td span,
        {
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
    </style>
@endsection

@section('script')
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>

    <script>
        let submissions_table = new DataTable('#submissions', {
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
                    orderable: false
                },
                {
                    targets: [1],
                    searchable: true,
                    orderable: false
                },
                {
                    targets: [2],
                    searchable: true,
                    orderable: false
                },
                {
                    targets: [3],
                    searchable: false,
                    orderable: false
                },
            ]
        });
    </script>
@endsection
