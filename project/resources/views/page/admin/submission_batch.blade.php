@extends('layouts.admin')
@section('title', 'Daftar Batch Penerimaan')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Batch Penerimaan</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Batch Penerimaan</li>
        </ul>
    </div>
    {{-- <div class="mt-3">
        <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11" data-bs-toggle="modal"
            data-bs-target="#picknumber">
            Buat Rekomendasi Penerima
        </button>
        <div class="modal fade" id="picknumber" tabindex="-1" aria-labelledby="picknumberLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="picknumberLabel">Pilih Jumlah Penerima</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            @csrf
                            <div>
                                <label class="form-label">Pilih Batch Penerimaan</label>
                                <input type="number" name="picknumber" class="form-control">
                            </div>
                            <div>
                                <label class="form-label">Jumlah Penerima Bantuan</label>
                                <input type="number" name="picknumber" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card basic-data-table mt-3">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Data Batch Penerimaan</h5>
                <button type="button" class="btn btn-sm btn-primary-600 radius-8 px-20 py-11" data-bs-toggle="modal"
                    data-bs-target="#newBatch">
                    Tambah Batch
                </button>
                <div class="modal fade" id="newBatch" tabindex="-1" aria-labelledby="newBatchLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                    <h5 class="modal-title" id="newBatchLabel">Data Batch Baru</h5>
                                    <small class="p-0 m-0 fst-italic"><span style="color: red;"
                                            class="p-0 m-0">*</span>Menandakan
                                        bahwa kolom ini wajib diisi atau
                                        dipilih.</small>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.batch.submission_batch_store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div>
                                        <label class="form-label">Nama Batch<span style="color: red;"
                                                class="p-0 m-0">*</span></label>
                                        <input type="text" name="batchName" class="form-control">
                                    </div>
                                    <div>
                                        <label class="form-label">Pilih Tahun<span style="color: red;"
                                                class="p-0 m-0">*</span></label>
                                        <select id="batchYear" name="batchYear" class="form-control">
                                            <option value="">-- Pilih Tahun --</option>
                                            @for ($year = $currentYear; $year >= $startYear; $year--)
                                                <option value="{{ $year }}"
                                                    @if ($year == $currentYear) selected @endif>{{ $year }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div>
                                        <label class="form-label">Bulan<span style="color: red;"
                                                class="p-0 m-0">*</span></label>
                                        <select id="batchMonth" name="batchMonth" class="form-control">
                                            <option value="">-- Pilih Bulan --</option>
                                            @foreach ($months as $value => $label)
                                                <option value="{{ $label }}"
                                                    @if ($value == $currentMonth) selected @endif>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                            <th style="text-align: center">Nama</th>
                            <th style="text-align: center">Tahun</th>
                            <th style="text-align: center">Bulan</th>
                            <th style="text-align: center">Jumlah Penerima</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($batches as $batch)
                            <tr>
                                <td style="text-align: center">{{ $batch->name }}</td>
                                <td style="text-align: center">{{ $batch->year }}</td>
                                <td style="text-align: center">{{ $batch->month }}</td>
                                <td style="text-align: center">{{ $batch->batchitem_count }}</td>
                                <td style="text-align: center">
                                    <a href="{{ route('admin.batch.submission_batch_detail', Crypt::encrypt($batch->id)) }}"
                                        class="btn btn-warning-600 radius-8 px-14 py-6 text-sm">
                                        Detail Penerimaan
                                    </a>
                                </td>
                                {{-- @if ($batch->status === 'on progres')
                                    <td style="text-align: center">Batch masih dalam proses..</td>
                                    <td style="text-align: center">Batch masih dalam proses..</td>
                                @else
                                    <td style="text-align: center">{{ $batch->batchitem_count }}</td>
                                    <td style="text-align: center">
                                        <a href="#" class="btn btn-warning-600 radius-8 px-14 py-6 text-sm">
                                            Detail Penerimaan
                                        </a>
                                    </td>
                                @endif --}}
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
    </style>
@endsection

@section('script')
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>

    <script>
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
                {
                    targets: [4],
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
