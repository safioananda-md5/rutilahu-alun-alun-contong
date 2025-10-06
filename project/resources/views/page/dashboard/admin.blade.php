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

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Pengajuan Baru</h5>
        </div>
        <div class="card-body">
            <div class="datatable-scroll">
                <table class="table bordered-table mb-0" id="submissions" style="table-layout: fixed; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:20%">ID Pengajuan</th>
                            <th style="width:30%">Nama</th>
                            <th style="width:40%">Alamat</th>
                            <th style="width:10%; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submissions as $submission)
                            <tr>
                                <td>{{ $submission->submission_id }}</td>
                                <td>{{ $submission->user->name }}</td>
                                <td>{{ $submission->address }}, RW {{ $submission->no_rw }},
                                    RT{{ $submission->no_rt }}</td>
                                <td style="text-align: center;">
                                    @if (!in_array($submission->status, [1, 3, 5, 6, 7, 8, 9]))
                                        {!! \App\Helpers\PengajuanStatusHelper::Status($submission->status) !!}
                                    @elseif($submission->status === 6)
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0 text-primary">Data Calon Penerima RUTILAHU</h5>
        </div>
        <div class="card-body">
            <div class="datatable-scroll">
                <table class="table bordered-table mb-0" id="prospectivesubmissions"
                    style="table-layout: fixed; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:20%">ID Pengajuan</th>
                            <th style="width:30%">Nama</th>
                            <th style="width:40%">Alamat</th>
                            <th style="width:10%; text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prospectivesubmissions as $prospectivesubmission)
                            <tr>
                                <td>{{ $prospectivesubmission->submission_id }}</td>
                                <td>{{ $prospectivesubmission->user->name }}</td>
                                <td>{{ $prospectivesubmission->address }}, RW {{ $prospectivesubmission->no_rw }},
                                    RT{{ $prospectivesubmission->no_rt }}</td>
                                <td style="text-align: center;">-</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0 text-success">Data Penerima RUTILAHU</h5>
        </div>
        <div class="card-body">
            <div class="datatable-scroll">
                <table class="table bordered-table mb-0" id="recipientsubmission" style="table-layout: fixed; width: 100%;">
                    <thead>
                        <tr>
                            <th style="width:20%; text-align: start">Diterima Tanggal</th>
                            <th style="width:30%">Nama</th>
                            <th style="width:50%">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipientsubmissions as $recipientsubmission)
                            <tr>
                                <td style="text-align: start">
                                    {{ \Carbon\Carbon::parse($recipientsubmission->created_at)->translatedFormat('j F Y') }}
                                </td>
                                <td>{{ $recipientsubmission->user->name }}</td>
                                <td>{{ $recipientsubmission->address }}, RW {{ $recipientsubmission->no_rw }},
                                    RT{{ $recipientsubmission->no_rt }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        #submissions,
        #prospectivesubmissions,
        #recipientsubmission {
            table-layout: fixed;
            width: 100%;
            min-width: 700px;
            /* opsional, biar scrollbar muncul */
            border-collapse: collapse;
        }

        #submissions td,
        #submissions th,
        #recipientsubmission th,
        #prospectivesubmissions td,
        #prospectivesubmissions th,
        #recipientsubmission th,
        table.dataTable td,
        table.dataTable th {
            white-space: normal !important;
            word-break: break-word !important;
            overflow-wrap: anywhere !important;
        }

        #submissions td div,
        #recipientsubmission td div,
        #prospectivesubmissions td div {
            white-space: normal !important;
        }

        table.dataTable td span,
        #submissions td span,
        #recipientsubmission td span,
        #prospectivesubmissions td span {
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

        let prospectivesubmissions_table = new DataTable('#prospectivesubmissions', {
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

        let recipientsubmission_table = new DataTable('#recipientsubmission', {
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
                    orderable: false
                },
                {
                    targets: [2],
                    searchable: true,
                    orderable: false
                },
            ]
        });
    </script>
@endsection
