@extends('layouts.auth')

@section('content')
    <section class="sign-in mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="sign-in__single text-center">
                        <h3 class="sign-in__title">Masuk</h3>
                        <form class="sign-in__form">
                            <div class="sign-in__form-input-box">
                                <input type="email" placeholder="Username or Email address*">
                            </div>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password*">
                            </div>
                            <div class="sign-in__form-btn-box mb-3">
                                <button type="submit" class="thm-btn sign-in__form-btn">Login</button>
                            </div>
                            <div class="sign-in__form-forgot-password">
                                <a href="#">Lupa password Anda?</a>
                            </div>
                            <div class="sign-in__form-register">
                                <a href="{{ route('register') }}">Belum punya Akun?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
