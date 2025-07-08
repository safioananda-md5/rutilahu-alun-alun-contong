@extends('layouts.layout')

@php
    $headTitle = 'Login | Rutilahu Alun-Alun Contong';
    $title='Login register';
    $subTitle = 'Login register';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')
        <div class="full-background"></div>
        <!--Sign In Start -->
        <section class="sign-in">
            <div class="container">
                <div class="row">
                    {{-- login --}}
                    <div class="col-xl-6 col-lg-6 mx-auto">
                        <div class="sign-in__single">
                            <form action="/login" method="post" class="sign-in__form">
                                @csrf
                                <div class="text-center mb-3">
                                    <img src="{{ asset('assets/images/icon/icon-surabaya.png') }}" width="100px" height="100px" alt="">
                                </div>
                                <h3 class="sign-in__title black-google text-center mb-2">Masuk</h3>
                                <h6 class="dark-grey text-center mb-3">Masuk Layanan Rutilahu <br> Kelurahan Alun-Alun Contong Kota Surabaya</h6>
                                <div class="sign-in__form-input-box">
                                    <label class="black-google font-weight-700 mb-2" for="nik">Masukkan NIK Anda</label>
                                    <input name="nik" id="nik" type="text" placeholder="NIK*">
                                </div>
                                <div class="sign-in__form-input-box">
                                    <label class="black-google font-weight-700 mb-2" for="password">Masukkan Password Anda</label>
                                    <input name="password" id="password" type="password" placeholder="Password*">
                                </div>
                                <div class="sign-in__form-btn-box justify-content-center">
                                    <button type="submit" class="thm-btn sign-in__form-btn">Login</button>
                                </div>
                                <div class="mt-3 sign-in__form-btn-box justify-content-center">
                                    <div class="sign-in__form-forgot-password">
                                        <a href="#" class="black-google font-weight-700">Lupa Password Anda?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- register --}}
                    {{-- <div class="col-xl-6 col-lg-6">
                        <div class="sign-in__single">
                            <h3 class="sign-in__title">Register</h3>
                            <form class="sign-in__form">
                                <div class="sign-in__form-input-box">
                                    <input type="email" placeholder="Email address">
                                </div>
                                <div class="sign-in__form-input-box">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="checked-box">
                                    <input type="checkbox" name="skipper3" id="skipper3" checked="">
                                    <label for="skipper3"><span></span>I accept company privacy policy.</label>
                                </div>
                                <div class="sign-in__form-btn-box">
                                    <button type="submit" class="thm-btn sign-in__form-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--Sign In End-->
@endsection 