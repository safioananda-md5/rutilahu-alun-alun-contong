@extends('layouts.admin')

@section('content')

    <div class="row gy-2">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-6">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        class="mb-0 w-48-px h-48-px bg-cyan-100 text-cyan-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <i class="ri-group-fill"></i>
                                    </span>
                                    <div>
                                        <h6 class="fw-semibold mb-2">650</h6>
                                        <span class="fw-medium text-secondary-light text-sm">Total Warga
                                            Mengajukan</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm mb-0"> <span class="text-cyan-600">4</span> Warga mengajukan minggu
                                ini
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-4">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        class="mb-0 w-48-px h-48-px bg-lilac-100 text-lilac-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <i class="ri-award-fill"></i>
                                    </span>
                                    <div>
                                        <h6 class="fw-semibold mb-2">570</h6>
                                        <span class="fw-medium text-secondary-light text-sm">Total Bantuan
                                            Diterima</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm mb-0"> <span class="text-lilac-600">8</span> Bantuan diterima bulan
                                ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Pengajuan</h5>
        </div>
        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>Safio_{{ $i + 1 }}</td>
                            <td>{{ $i + 1 }}</td>
                            <td>Safio_{{ $i + 1 }}</td>
                            <td>{{ $i + 1 }}</td>
                            <td>Safio_{{ $i + 1 }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('css')
    <style>
        table, th, td {
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
        let table = new DataTable('#dataTable');
    </script>
@endsection
