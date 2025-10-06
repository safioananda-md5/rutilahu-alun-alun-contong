@extends('layouts.master')

@section('content')
    <section class="checkout-page mt-5">
        <div class="container">
            <h2 class="mb-1">Detail Pengajuan Anda</h2>
            <h5 class="mt-4">Alur Pengajuan</h5>
            <div class="table-responsive mt-3">
                <div id="stepper" class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        @if ($submissions->status === 1)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-danger">1</span>
                                    <span class="bs-stepper-label text-danger">Dibatalkan</span>
                                </button>
                            </div>
                        @endif
                        @if ($submissions->status === 2)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-warning">1</span>
                                    <span class="bs-stepper-label text-warning">Menunggu Verifikasi RT</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @elseif($submissions->status > 2 && $submissions->status !== 3)
                            <div class="step active">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Verifikasi RT</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @else
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-danger">1</span>
                                    <span class="bs-stepper-label text-danger">Ditolak RT</span>
                                </button>
                            </div>
                        @endif
                        @if ($submissions->status === 4)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-warning">2</span>
                                    <span class="bs-stepper-label text-warning">Menunggu Verifikasi RW</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @elseif($submissions->status > 4 && $submissions->status !== 5)
                            <div class="step active">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Verifikasi RW</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @elseif($submissions->status === 5)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-danger">2</span>
                                    <span class="bs-stepper-label text-danger">Ditolak RW</span>
                                </button>
                            </div>
                        @endif
                        @if ($submissions->status === 6)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-warning">3</span>
                                    <span class="bs-stepper-label text-warning">Menunggu Verifikasi Kelurahan</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @elseif($submissions->status > 6 && $submissions->status !== 7)
                            <div class="step active">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">Verifikasi Kelurahan</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @elseif($submissions->status === 7)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle bg-danger">3</span>
                                    <span class="bs-stepper-label text-danger">Ditolak Kelurahan</span>
                                </button>
                            </div>
                        @endif
                        @if ($submissions->status >= 8)
                            <div class="step active">
                                <button type="button" class="step-trigger" role="tab" disabled>
                                    <span class="bs-stepper-circle">4</span>
                                    <span class="bs-stepper-label">Disetujui (Calon Penerima)</span>
                                </button>
                            </div>
                            <div class="line"></div>
                        @endif
                        @if ($submissions->status === 9)
                            <div class="step">
                                <button type="button" class="step-trigger" role="tab"disabled>
                                    <span class="bs-stepper-circle bg-success">5</span>
                                    <span class="bs-stepper-label text-success">Penerima Bantuan Rutilahu</span>
                                </button>
                            </div>
                        @endif
                        {{-- <div class="step active" data-target="#step-rt">
                            <button type="button" class="step-trigger" role="tab" id="trigger-rt" disabled>
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Verifikasi RT</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step active" data-target="#step-rw">
                            <button type="button" class="step-trigger" role="tab" id="trigger-rw" disabled>
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Verifikasi RW</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#step-kelurahan">
                            <button type="button" class="step-trigger" role="tab" id="trigger-kelurahan" disabled>
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Verifikasi Kelurahan</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#step-disetujui">
                            <button type="button" class="step-trigger" role="tab" id="trigger-disetujui" disabled>
                                <span class="bs-stepper-circle">4</span>
                                <span class="bs-stepper-label">Calon Penerima</span>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <h5 class="mt-5">Data Diri</h5>
            <hr>
            <div class="row">
                <div class="col-md-3 fw-bold">Nama Lengkap</div>
                <div class="col-md-9">{{ Auth::user()->name }}</div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">NIK</div>
                <div class="col-md-9 d-flex align-items-center">{{ substr(Auth::user()->nik, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                        data-height="20"></span>
                </div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">No. KK</div>
                <div class="col-md-9">{{ substr(Auth::user()->no_kk, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                        data-height="20"></span>
                </div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">Alamat KK</div>
                <div class="col-md-9">{{ Auth::user()->regency }}</div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">Status Keluarga Miskin</div>
                <div class="col-md-9">
                    @if (Auth::user()->poor_family_status === 'non-gamis')
                        <span class="badge bg-danger">{{ Str::upper(Auth::user()->poor_family_status) }}</span>
                    @else
                        <span class="badge bg-success">{{ Str::upper(Auth::user()->poor_family_status) }}</span>
                    @endif
                </div>
            </div>
            <form action="{{ route('store_formulir_pengajuan', Crypt::encrypt(Auth::user()->id)) }}" method="POST"
                class="billing_details_form" id="submissionForm" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="your_order">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="billing_details">
                                <h5 class="mt-5">Alamat Domisili</h5>
                                <hr>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-8">
                                        <label for="address" class="mb-2 fw-bold">
                                            Alamat Domisili
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            <p>{{ $submissions->address }}, RW {{ $submissions->no_rw }}, RT
                                                {{ $submissions->no_rt }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->poor_family_status === 'non-gamis')
                                    <h5 class="mt-3">Data Sosial Ekonomi</h5>
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="revenue" class="mb-2 fw-bold">
                                                Jumlah Pendapatan
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Dihitung melalui penghasilan kepala keluarga.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box fs-5 ms-3">
                                                <p>{{ 'Rp ' . number_format($submissions->revenue, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="asset" class="mb-2 fw-bold">
                                                Jumlah Kepemilikan Asset
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Jumlah asset dinilai melalui total harga jual masing-masing asset seperti; tanah, kendaraan, alat usaha, peralatan elektronik, atau perhiasan.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box fs-5 ms-3">
                                                <p>{{ 'Rp ' . number_format($submissions->asset, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dependents" class="mb-2 fw-bold">
                                                Jumlah Tanggungan Anggota Keluarga
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Tanggungan anggota keluarga mencakup anak-anak, lansia, atau anggota keluarga yang tidak bekerja dan bergantung hanya kepada kepala keluarga.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box fs-5 ms-3">
                                                <p>{{ $submissions->dependents }} Orang</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <h5 class="mt-3">Data Bangunan</h5>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="building_area" class="mb-2 fw-bold">
                                            Luas Bangunan
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            {{ $submissions->building_area }} m<sup>2</sup>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="building_legality" class="mb-2 fw-bold">
                                            Legalitas Bangunan
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            @foreach ($Legalitas as $LegalitasItem)
                                                @if ($LegalitasItem['value'] === $submissions->building_legality)
                                                    <p>{{ $LegalitasItem['name'] }}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="roof_condition" class="mb-2 fw-bold">
                                            Kondisi Atap Bangunan
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-html="true"
                                                data-bs-content="
                                                <div>Rusak ringan: genteng bocor, pecah, genteng sebagian;</div>
                                                <div style='margin-top:10px;'>Rusak sedang: rangka kayu lapuk / keropos, atap asbes / seng;</div>
                                                <div style='margin-top:10px;'>Rusak berat: roboh, tidak memiliki atap.</div>
                                            ">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            @foreach ($Katap as $KatapItem)
                                                @if ($KatapItem['value'] === $submissions->roof_condition)
                                                    <p>{{ $KatapItem['name'] }}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="wall_condition" class="mb-2 fw-bold">
                                            Kondisi Dinding Bangunan
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            @foreach ($Kdinding as $KdindingItem)
                                                @if ($KdindingItem['value'] === $submissions->wall_condition)
                                                    <p>{{ $KdindingItem['name'] }}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="floor_condition" class="mb-2 fw-bold">
                                            Kondisi Lantai Bangunan<span style="color: red;">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-html="true"
                                                data-bs-content="Lantai rendah adalah kondisi dimana lantai terlihat tidak rata/ bergelombang, berpotensi terendam banjir, dan berada dibawah ketinggian jalan.">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box fs-5 ms-3">
                                            @foreach ($Klantai as $KlantaiItem)
                                                @if ($KlantaiItem['value'] === $submissions->floor_condition)
                                                    <p>{{ $KlantaiItem['name'] }}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-5">
                                <h2 class="mb-5">Dokumen Terkait</h2>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="certificate_of_domicile" class="fw-bold">
                                                Surat Keterangan Domisili yang diterbitkan oleh Kelurahan Alun-Alun
                                                Contong
                                            </label><br>
                                            {!! $documents['certificate_of_domicile'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="certificate_of_ownership" class="fw-bold">
                                                Unggah Serfikat Hak Milik<span style="color: red;">*</span>
                                            </label><br>
                                            {!! $documents['certificate_of_ownership'] !!}
                                        </div>
                                    </div>
                                </div>
                                <h2 class="my-5">Unggah Dokumen Pernyataan</h2>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_nodispute" class="fw-bold">
                                                Surat Pernyataan (bermaterai) rumah/tanah tidak dalam sengketa dan akan
                                                menghuni sendiri rumah yang diperbaiki<span style="color: red;">*</span>
                                            </label><br>
                                            {!! $documents['statement_of_nodispute'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_neverreceivedassistance" class="fw-bold">
                                                Surat Pernyataan (bermaterai) belum pernah menerima bantuan perbaikan rumah
                                                dari Pemerintah <small>(di kecualikan untuk pembuatan jamban sehat dan
                                                    bencana)</small><span style="color: red;">*</span>
                                            </label><br>
                                            {!! $documents['statement_of_neverreceivedassistance'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_sellthehouse" class="fw-bold">
                                                Surat Pernyataan (bermaterai) kesediaan tidak menjual atau menyewakan rumah
                                                hasil rehabilitasi dalam kurun waktu 5 (lima) Tahun<span
                                                    style="color: red;">*</span>
                                            </label><br>
                                            {!! $documents['statement_of_sellthehouse'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_incomebelowminimumwage" class="fw-bold">
                                                Surat Pernyataan (bermaterai) pendapatan keluarga dibawah UMK <small>(khusus
                                                    keluarga miskin dan pramiskin)</small>
                                            </label><br>
                                            {!! $documents['statement_of_incomebelowminimumwage'] !!}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right d-flex justify-content-end mt-5">
                    <a href="{{ route('pengajuan') }}" class="thm-btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">

    <style>
        .bs-stepper .step-trigger.disabled,
        .bs-stepper .step-trigger:disabled {
            opacity: 1 !important;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script>
        $(document).on('click', '.open', function() {
            let head = $(this).closest('.col-md-9');
            let type = $(this).closest('.row').find('.fw-bold').text();
            if (type === 'NIK') {
                $.ajax({
                    url: "{{ route('data.nik_data', ['name' => Crypt::encrypt('211'), 'id' => Crypt::encrypt(Auth::user()->id)]) }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        if (res.success) {
                            head.html(`
                                ${res.data}
                                <span class="iconify close ms-3" style="cursor: pointer;" data-icon="mdi:eye-off" data-width="20"
                                    data-height="20"></span>
                            `);
                        } else {
                            flasher.error(res.message);
                        }
                    },
                    error: function(xhr) {
                        flasher.error('Gagal mendapatkan data NIK.');
                    }
                });
            } else {
                $.ajax({
                    url: "{{ route('data.kk_data', ['name' => Crypt::encrypt('122'), 'id' => Crypt::encrypt(Auth::user()->id)]) }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(res) {
                        if (res.success) {
                            head.html(`
                                ${res.data}
                                <span class="iconify close ms-3" style="cursor: pointer;" data-icon="mdi:eye-off" data-width="20"
                                    data-height="20"></span>
                            `);
                        } else {
                            flasher.error(res.message);
                        }
                    },
                    error: function(xhr) {
                        flasher.error('Gagal mendapatkan data No. KK.');
                    }
                });
            }

        });

        $(document).on('click', '.close', function() {
            let head = $(this).closest('.col-md-9');
            let type = $(this).closest('.row').find('.fw-bold').text();
            head.empty();
            if (type === 'NIK') {
                head.html(`
                    {{ substr(Auth::user()->nik, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                            data-height="20"></span> 
                `);
            } else {
                head.html(`
                    {{ substr(Auth::user()->no_kk, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                            data-height="20"></span> 
                `);
            }

        });
    </script>
@endsection
