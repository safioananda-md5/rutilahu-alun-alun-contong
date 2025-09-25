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
                <a href="{{ route('admin.account_verify_admin') }}"
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
                <div class="col-lg-4 d-flex align-items-start">
                    <span class="w-25 fw-bold">Nama</span>
                    <span class="px-3">:</span>
                    <span class="w-75">{{ $user_data->name }}</span>
                </div>
                <div class="col-lg-4 d-flex align-items-start">
                    <span class="w-25 fw-bold">No. KTP</span>
                    <span class="px-3">:</span>
                    <span class="w-75">{{ $user_data->nik }}</span>
                </div>
                <div class="col-lg-4 d-flex align-items-start">
                    <span class="w-25 fw-bold">
                        Email
                    </span>
                    <span class="px-3">:</span>
                    <span class="w-75 d-inline-flex align-items-center flex-wrap">
                        {{ $user_data->email }}
                        @if ($user_data->email_verified_at === null)
                            <iconify-icon icon="mdi:close-circle-outline" class="ps-1 text-danger"
                                style="vertical-align: middle;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Email tidak ter-verifikasi."></iconify-icon>
                        @else
                            <iconify-icon icon="mdi:check-decagram" class="ps-1 text-success"
                                style="vertical-align: middle;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Email ter-verifikasi."></iconify-icon>
                        @endif
                    </span>
                </div>
                <div class="col-lg-4 d-flex align-items-start">
                    <span class="w-25 fw-bold">
                        No. Telepon
                    </span>
                    <span class="px-3">:</span>
                    <span class="w-75 d-inline-flex align-items-center">
                        {{ $user_data->phone }}
                        @if ($user_data->phone_verified_at === null)
                            <iconify-icon icon="mdi:close-circle-outline" class="ps-1 text-danger"
                                style="vertical-align: middle;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Telepon tidak ter-verifikasi."></iconify-icon>
                        @else
                            <iconify-icon icon="mdi:check-decagram" class="ps-1 text-success"
                                style="vertical-align: middle;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Telepon ter-verifikasi."></iconify-icon>
                        @endif
                    </span>
                </div>
                <div class="col-lg-4 d-flex align-items-start">
                    <span class="w-25 fw-bold">No. KK</span>
                    <span class="px-3">:</span>
                    <span class="w-75">{{ $user_data->no_kk }}</span>
                </div>
            </div>
            <div class="row my-3" style="border-top: 1px solid #ddd">
                <div class="col-lg-4 py-3">
                    <div class="row">
                        <div class="col-6 fw-bold">
                            Foto Kartu Tanda Penduduk
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-4">
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
                        <div class="col-6 fw-bold">
                            Foto Selfi Dengan Kartu Tanda Penduduk
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-4">
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
                        <div class="col-6 fw-bold">
                            Foto Kartu Keluarga
                        </div>
                        <div class="col-2">
                            :
                        </div>
                        <div class="col-4">
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
            <div class="row mt-3 pt-3 fw-bold" style="border-top: 1px solid #ddd">
                Lakukan tindakan terhadap status verifikasi akun pengguna:
            </div>
            <div class="row">
                <div class="col-12 py-3 text-center">
                    <form action="{{ route('admin.verification.store', Crypt::encrypt($user_data->id)) }}"
                        method="POST">
                        @csrf
                        <button type="submit" name="action" value="{{ Crypt::encrypt('tolak') }}"
                            class="btn btn-danger me-5">
                            Tolak Verikasi
                        </button>
                        <button type="submit" name="action" value="{{ Crypt::encrypt('setujui') }}"
                            class="btn btn-success ms-5">
                            Setujui Verifikasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-footer py-3" style="text-align: right;">
            <button onclick="window.history.back()" class="btn btn-sm btn-outline-danger me-2">Kembali</button>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
@endsection

@section('script')
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>

    <script>
        Fancybox.bind("[data-fancybox]", {});

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
    </script>
@endsection
