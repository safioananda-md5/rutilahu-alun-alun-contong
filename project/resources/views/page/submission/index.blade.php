@extends('layouts.master')

@section('content')
    <!--Page Header Start-->
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
    <!--Page Header End-->

    <section class="checkout-page mt-5">
        <div class="container">
            <div class="text-right d-flex justify-content-start mb-3">
                <a href="{{ route('formulir_pengajuan') }}" class="thm-btn">Buat Pengajuan</a>
                <a href="checkout.html" class="thm-btn ms-3">Buat Pengajuan</a>
            </div><!-- /.text-right -->
            <div class="your_order">
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
            </div>
        </div>
    </section>
@endsection
