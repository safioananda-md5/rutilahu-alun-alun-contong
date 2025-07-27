@extends('layouts.auth')

@section('content')
    <section class="sign-in mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="sign-in__single">
                        <h3 class="sign-in__title text-center">Daftar Akun</h3>
                        <form class="sign-in__form text-left">
                            <label for="company_name" class="mb-2 fw-bold">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="email" placeholder="Email address">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                NIK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                No. KK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                No. Telepon (WhatsApp)<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                Alamat <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                Kota <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                Kecamatan <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                Kelurahan <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                RT <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                RW <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="password" placeholder="Password">
                            </div>
                            <hr>
                            <h4 class="mb-4">Upload Bukti Kependudukan</h4>
                            <label for="company_name" class="mb-2 fw-bold">
                                Unggah Foto KTP <span class="text-danger">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            <label for="company_name" class="mb-2 fw-bold">
                                Unggah Foto KK <span class="text-danger">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                            <hr>
                            <label for="company_name" class="mb-2">
                                Data yang telah Anda inputkan akan diproses oleh tim kami dalam waktu maksimal 7 (tujuh)
                                hari kerja setelah pendaftaran dilakukan.
                            </label>
                            <div class="checked-box mt-3">
                                <input type="checkbox" name="skipper3" id="skipper3" checked="">
                                <label for="skipper3"><span></span>Dengan ini saya menyatakan bahwa seluruh data yang saya
                                    isikan dalam proses registrasi adalah benar, jujur, dan sesuai dengan keadaan
                                    sebenarnya. Saya bersedia bertanggung jawab atas kebenaran data tersebut.</label>
                            </div>
                            <div class="sign-in__form-btn-box mt-3">
                                <button type="submit" class="thm-btn sign-in__form-btn">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
