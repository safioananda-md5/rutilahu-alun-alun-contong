@extends('layouts.admin')
@section('title', 'Detail Verifikasi Akun')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Detail Verifikasi Akun</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">
                <a href="{{ route('admin.verification.account_verify_admin') }}"
                    class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Daftar Verifikasi Akun
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Detail Verifikasi Akun</li>
        </ul>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Detail Verifikasi Akun</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 d-flex align-items-start">
                    <span class="fw-bold" style="display: inline-block; width: 30%">Nama</span>
                    <span style="display: inline-block; width: 5%">:</span>
                    <span style="display: inline-block; width: 65%">{{ $user_data->name }}</span>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <span class="fw-bold" style="display: inline-block; width: 30%">No. KTP</span>
                    <span style="display: inline-block; width: 5%">:</span>
                    <span style="display: inline-block; width: 65%">{{ $user_data->nik }}</span>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <span class="fw-bold" style="display: inline-block; width: 30%">
                        No. Telp
                        <span>
                            @if ($user_data->phone_verified_at === null)
                                <iconify-icon icon="mdi:close-circle-outline" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Telepon tidak ter-verifikasi."></iconify-icon>
                            @else
                                <iconify-icon icon="mdi:check-decagram" class="text-success" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Telepon ter-verifikasi."></iconify-icon>
                            @endif
                        </span>
                    </span>
                    <span style="display: inline-block; width: 5%">:</span>
                    <span style="display: inline-block; width: 65%">{{ $user_data->phone }}</span>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <span class="fw-bold" style="display: inline-block; width: 30%">
                        Email
                        <span>
                            @if ($user_data->email_verified_at === null)
                                <iconify-icon icon="mdi:close-circle-outline" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Email tidak ter-verifikasi."></iconify-icon>
                            @else
                                <iconify-icon icon="mdi:check-decagram" class="text-success" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Email ter-verifikasi."></iconify-icon>
                            @endif
                        </span>
                    </span>
                    <span style="display: inline-block; width: 5%">:</span>
                    <span style="display: inline-block; width: 65%">{{ $user_data->email }}</span>
                </div>
                <div class="col-md-4 d-flex align-items-start">
                    <span class="fw-bold" style="display: inline-block; width: 30%">No. KK</span>
                    <span style="display: inline-block; width: 5%">:</span>
                    <span style="display: inline-block; width: 65%">{{ $user_data->no_kk }}</span>
                </div>
            </div>
            <div class="row mt-3" style="border-top: 1px solid #ddd">
                <div class="col-lg-4 py-3">
                    <div class="row">
                        <div class="col-9">
                            Foto Kartu Tanda Penduduk
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            <a id="btnShowKTP" class="btn btn-primary disabled" data-fancybox="ktp"
                                data-src="{{ route('admin.verification.showKTP', Crypt::encrypt($user_data->id)) }}"
                                data-caption="Foto Kartu Tanda Penduduk">
                                <span class="spinner-border spinner-border-sm me-1" role="status"
                                    aria-hidden="true"></span>
                                <iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="row">
                        <div class="col-9">
                            Foto Selfi Dengan Kartu Tanda Penduduk
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            <a id="btnShowSTKP" class="btn btn-primary disabled" data-fancybox="sktp"
                                data-src="{{ route('admin.verification.showSKTP', Crypt::encrypt($user_data->id)) }}"
                                data-caption="Foto Selfi Dengan Kartu Tanda Penduduk">
                                <span class="spinner-border spinner-border-sm me-1" role="status"
                                    aria-hidden="true"></span>
                                <iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="row">
                        <div class="col-9">
                            Foto Kartu Keluarga
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            <a id="btnShowKK" class="btn btn-primary disabled" data-fancybox="kk"
                                data-src="{{ route('admin.verification.showKK', Crypt::encrypt($user_data->id)) }}"
                                data-caption="Foto Kartu Keluarga">
                                <span class="spinner-border spinner-border-sm me-1" role="status"
                                    aria-hidden="true"></span>
                                <iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.verification.store', Crypt::encrypt($user_data->id)) }}" method="POST"
                novalidate>
                @csrf
                <div class="row" style="border-top: 1px solid #ddd">
                    <div class="col-md-12 mt-3">
                        <b>Lakukan tindakan terhadap status verifikasi akun pengguna:</b>
                    </div>
                    <div class="col-md-12 mt-3">
                        <small>
                            Cek status warga miskin pada link berikut :
                            <a href="https://sikeluargamiskin.surabaya.go.id/" class="Link"
                                target="_blank">sikeluargamiskin.surabaya.go.id</a>
                        </small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pilih Status Keluarga Miskin<span style="color: red">*</span></label>
                        <select name="status_gamis" class="@error('status_gamis') is-invalid @enderror" id="StatusGamis"
                            style="width: 100%">
                            <option value="">-- Pilih Status --</option>
                            @foreach ($StatusGamis as $StatusGamisItem)
                                <option value="{{ $StatusGamisItem['value'] }}">{{ $StatusGamisItem['name'] }}</option>
                            @endforeach
                        </select>
                        @error('status_gamis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <label class="form-label">Pilih Verifikasi<span style="color: red">*</span></label>
                        <div class="radio-group @error('verification') is-invalid @enderror">
                            <label class="radio-btn">
                                <input type="radio" name="verification" value="yes">
                                <span class="checkmark"></span>
                                <span class="label-text">Ya</span>
                            </label>
                            <label class="radio-btn">
                                <input type="radio" name="verification" value="no">
                                <span class="checkmark"></span>
                                <span class="label-text">Tidak</span>
                            </label>
                            <button type="submit" class="btn btn-success">Verifikasi</button>
                        </div>
                        @error('verification')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer py-3" style="text-align: right;">
            <button onclick="window.history.back()" class="btn btn-sm btn-outline-danger me-2">Kembali</button>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .Link:hover {
            color: rgb(0, 166, 255);
        }

        .select2-container .selection {
            width: 100%
        }

        .select2-selection .select2-selection--single {
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

        .radio-group {
            display: flex;
            gap: 1rem;
        }

        .radio-btn {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s;
            user-select: none;
        }

        /* sembunyikan input bawaan */
        .radio-btn input {
            display: none;
        }

        /* bulatan centang */
        .radio-btn .checkmark {
            width: 18px;
            height: 18px;
            border: 2px solid #6c757d;
            border-radius: 50%;
            margin-right: 0.5rem;
            position: relative;
        }

        /* titik dalam saat dipilih */
        .radio-btn input:checked+.checkmark::after {
            content: "";
            width: 10px;
            height: 10px;
            background: #0d6efd;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* teks label */
        .radio-btn .label-text {
            font-size: 1rem;
            color: #212529;
        }

        /* efek hover */
        .radio-btn:hover {
            background: #f8f9fa;
            border-color: #0d6efd;
        }
    </style>
@endsection

@section('script')
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        Fancybox.bind("[data-fancybox]", {});
        
        $('#StatusGamis').select2();

        $(document).ready(function() {
            var $btnKTP = $("#btnShowKTP");
            var urlKTP = $btnKTP.data("src");
            var $btnSKTP = $("#btnShowSTKP");
            var urlSKTP = $btnSKTP.data("src");
            var $btnKK = $("#btnShowKK");
            var urlKK = $btnKK.data("src");

            $.ajax({
                url: urlKTP,
                type: "HEAD",
                success: function() {
                    $btnKTP.removeClass("disabled").removeAttr("disabled")
                        .html('<iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>');
                },
                error: function() {
                    $btnKTP.html(
                            '<iconify-icon icon="mdi:alert-circle" class="text-warning"></iconify-icon>'
                        )
                        .attr("title", "File tidak ditemukan");
                }
            });

            $.ajax({
                url: urlSKTP,
                type: "HEAD",
                success: function() {
                    $btnSKTP.removeClass("disabled").removeAttr("disabled")
                        .html('<iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>');
                },
                error: function() {
                    $btnSKTP.html(
                            '<iconify-icon icon="mdi:alert-circle" class="text-warning"></iconify-icon>'
                        )
                        .attr("title", "File tidak ditemukan");
                }
            });

            $.ajax({
                url: urlKK,
                type: "HEAD",
                success: function() {
                    $btnKK.removeClass("disabled").removeAttr("disabled")
                        .html('<iconify-icon icon="mdi:camera" class="text-light"></iconify-icon>');
                },
                error: function() {
                    $btnKK.html(
                            '<iconify-icon icon="mdi:alert-circle" class="text-warning"></iconify-icon>'
                        )
                        .attr("title", "File tidak ditemukan");
                }
            });
        });

        $(document).ready()
    </script>
@endsection
