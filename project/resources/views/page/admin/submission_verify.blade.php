@extends('layouts.admin')
@section('title', 'Daftar Verifikasi Pengajuan')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Verifikasi Pengajuan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Verifikasi Pengajuan</li>
        </ul>
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
                                        <a href="{{ route('admin.detail_pengajuan', Crypt::encrypt($submission->id)) }}"
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
@endsection

@section('css')
    <style>
        table,
        th,
        td {
            text-align: left !important;
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

        setInterval(function() {
            submissions_table.ajax.reload(null, false);
        }, 10000);
    </script>
@endsection
