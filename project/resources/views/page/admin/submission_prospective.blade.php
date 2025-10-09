@extends('layouts.admin')
@section('title', 'Daftar Calon Penerima')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Calon Penerima</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Calon Penerima</li>
        </ul>
    </div>
    <div class="mt-3">
        <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11" data-bs-toggle="modal"
            data-bs-target="#picknumber">
            Buat Rekomendasi Penerima
        </button>
        <div class="modal fade" id="picknumber" tabindex="-1" aria-labelledby="picknumberLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" id="picknumberLabel">Pilih Jumlah Penerima</h5>
                            <small class="p-0 m-0 fst-italic"><span style="color: red;" class="p-0 m-0">*</span>Menandakan
                                bahwa kolom ini wajib diisi atau
                                dipilih.</small>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.math.calculation_submission_store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div>
                                <label class="form-label">Jumlah Penerima Bantuan<span style="color: red;"
                                        class="p-0 m-0">*</span></label>
                                <input type="number" name="picknumber" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Buat Rekomendasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card basic-data-table mt-3">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Calon Penerima RUTILAHU</h5>
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
                                <td style="text-align: center;">
                                    <a href="{{ route('admin.detail_pengajuan', Crypt::encrypt($prospectivesubmission->id)) }}"
                                        class="btn btn-primary-600 radius-8 px-14 py-6 text-sm">Detail</a>
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

        setInterval(function() {
            prospectivesubmissions_table.ajax.reload(null, false);
        }, 10000);
    </script>
@endsection
