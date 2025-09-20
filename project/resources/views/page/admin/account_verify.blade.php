@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Verifikasi Akun</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Verifikasi Akun</li>
        </ul>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Verifikasi Akun</h5>
        </div>
        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable">
                <thead>
                    <tr>
                        <th>Tanggal Daftar</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
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
        // $('#dataTable').DataTable(datatableSetting);
        $('#dataTable').DataTable($.extend(true, {}, datatableSetting, {
            ajax: {
                url: "{{ route('admin.account_verify_data') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            },
            scrollX: true,
            autoWidth: false,
            columns: [{
                    data: "created_at",
                    title: "Tanggal Daftar",
                    render: function(data, type, row) {
                        return row.created_at_display;
                    },
                    searchable: false,
                    orderable: true
                },
                {
                    data: "name",
                    title: "Nama",
                    searchable: true,
                    orderable: false
                },
                {
                    data: "email",
                    title: "Email",
                    searchable: true,
                    orderable: false
                },
                {
                    data: "phone",
                    title: "No. Telepon",
                    searchable: true,
                    orderable: false
                },
                {
                    data: "actions",
                    title: "Aksi",
                    orderable: false,
                    searchable: false
                }
            ]
        }));
    </script>
@endsection
