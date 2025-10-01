@extends('layouts.master')

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>pengajuan</li>
                </ul>
                <h2>Pengajuan Anda</h2>
            </div>
        </div>
    </section>
    <section class="checkout-page mt-5">
        <div class="container">
            @if ($submissions)
                <div class="text-right d-flex justify-content-start mb-5 gap-3">
                    <a href="{{ route('formulir_detail') }}" class="thm-btn">Detail Pengajuan</a>
                    <a href="{{ route('formulir_detail') }}" class="thm-btn-danger">Batalkan Pengajuan</a>
                </div>
            @else
                <div class="text-right d-flex justify-content-start mb-5">
                    <a href="{{ route('formulir_pengajuan') }}" class="thm-btn">Buat Pengajuan</a>
                </div>
            @endif
            <div class="your_order">
                @if ($submissions)
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table cart-table" width="100%">
                                <thead>
                                    <tr>
                                        <th width="35%">ID Pengajuan</th>
                                        <th width="35%">Alamat</th>
                                        <th width="5%" style="text-align: center">RT</th>
                                        <th width="5%" style="text-align: center">RW</th>
                                        <th width="20%" style="text-align: center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="35%">
                                            {{ $submissions->submission_id }}
                                        </td>
                                        <td width="35%">
                                            {{ $submissions->address }}
                                        </td>
                                        <td width="5%" style="text-align: center">
                                            {{ $submissions->no_rt }}
                                        </td>
                                        <td width="5%" style="text-align: center">
                                            {{ $submissions->no_rw }}
                                        </td>
                                        <td width="20%" style="text-align: center">
                                            {!! \App\Helpers\PengajuanStatusHelper::Status($submissions->status) !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <table class="order_table_detail">
                                <tbody class="order_table_head">
                                    <tr>
                                        <td class="pro__title">Tidak ada pengajuan.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // thm-btn-danger
    </script>
@endsection
