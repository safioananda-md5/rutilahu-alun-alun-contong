@extends('layouts.auth')

@section('content')
    <section class="sign-in mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="sign-in__single">
                        <h3 class="sign-in__title text-center">Daftar Akun</h3>
                        <form class="sign-in__form text-left" method="post" id="registerForm"
                            action="{{ route('register.store') }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <label for="full_name" class="mb-2 fw-bold">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="text" placeholder="Nama lengkap" data-label="Nama Lengkap" id="full_name"
                                    name="full_name">
                                <span class="error-text text-danger"></span>
                            </div>
                            <label for="nik" class="mb-2 fw-bold">
                                NIK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="number" placeholder="NIK" id="nik" data-label="NIK" name="nik">
                                <span class="error-text text-danger"></span>
                            </div>
                            <label for="no_kk" class="mb-2 fw-bold">
                                No. KK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="number" placeholder="No. KK" id="no_kk" data-label="No. KK"
                                    name="no_kk">
                                <span class="error-text text-danger"></span>
                            </div>
                            <label for="email" class="mb-2 fw-bold">
                                Email<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="email" placeholder="Email" id="email" data-label="Email" name="email">
                                <span class="error-text text-danger"></span>
                            </div>
                            <label for="phone" class="mb-2 fw-bold">
                                No. Telepon (WhatsApp)<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="text" placeholder="No. Telepon (Whatsapp)" data-label="No. Telepon"
                                    id="phone" name="phone">
                                <span class="error-text text-danger"></span>
                            </div>
                            <hr>
                            <h4 class="mb-4">Upload Bukti Kependudukan</h4>
                            <label for="foto_ktp" class="mb-2 fw-bold">
                                Unggah Foto KTP <span class="text-danger">*</span>
                            </label>
                            <div class="input-register-form">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" data-label="Bukti Kependudukan"
                                        id="foto_ktp" name="foto_ktp" accept=".jpg,.jpeg,.png,.pdf">
                                </div>
                                <span class="error-text text-danger"></span>
                            </div>
                            <label for="foto_kk" class="mb-2 fw-bold">
                                Unggah Foto KK <span class="text-danger">*</span>
                            </label>
                            <div class="input-register-form">
                                <div class="input-group mb-3 ">
                                    <input type="file" class="form-control" data-label="Foto KK" id="foto_kk"
                                        name="foto_kk" accept=".jpg,.jpeg,.png,.pdf">
                                </div>
                                <span class="error-text text-danger"></span>
                            </div>
                            <hr>
                            <label for="registerForm" class="mb-2">
                                Data yang telah Anda inputkan akan diproses oleh tim kami dalam waktu maksimal 7 (tujuh)
                                hari kerja setelah pendaftaran dilakukan.
                            </label>
                            <label for="registerForm" class="mb-2">
                                Detail akun akan dikirimkan melalui email yang telah Anda daftarkan.
                            </label>
                            <div class="mt-3">
                                <div class="row input-register-form">
                                    <div class="col-1">
                                        <input type="checkbox" name="validasi" id="validasi" data-label="Penyataan">
                                    </div>
                                    <div class="col-11">
                                        <label for="validasi">Dengan ini saya menyatakan bahwa seluruh data
                                            yang saya
                                            isikan dalam proses registrasi adalah benar, jujur, dan sesuai dengan keadaan
                                            sebenarnya. Saya bersedia bertanggung jawab atas kebenaran data
                                            tersebut.</label>
                                    </div>
                                    <span class="error-text text-danger"></span>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                        data-callback="recaptchaSuccess">
                                    </div>
                                    @error('g-recaptcha-response')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="sign-in__form-btn-box mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js?hl=id" async defer></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });

        function recaptchaSuccess() {
            $(document).find('.sign-in__form-btn-box').append(
                `<button type="submit" class="thm-btn sign-in__form-btn">Daftar</button>`);
        }

        $('#nik').on('input', function() {
            let value = $(this).val();
            let errorEl = $(this).closest('.input-register-form').find('.error-text');

            if (!/^\d*$/.test(value)) {
                errorEl.text('NIK hanya boleh angka.');
                // hapus karakter non-angka
                $(this).val(value.replace(/\D/g, ''));
                return;
            }

            if (value.length > 16) {
                errorEl.text('NIK maksimal 16 digit.');
                $(this).val(value.slice(0, 16));
                return;
            }

            errorEl.text('');
        });

        $('#no_kk').on('input', function() {
            let value = $(this).val();
            let errorEl = $(this).closest('.input-register-form').find('.error-text');

            if (!/^\d*$/.test(value)) {
                errorEl.text('NIK hanya boleh angka.');
                // hapus karakter non-angka
                $(this).val(value.replace(/\D/g, ''));
                return;
            }

            if (value.length > 16) {
                errorEl.text('NIK maksimal 16 digit.');
                $(this).val(value.slice(0, 16));
                return;
            }

            errorEl.text('');
        });

        $('#email').on('input', function() {
            let value = $(this).val();
            let errorEl = $(this).closest('.input-register-form').find('.error-text');

            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (value === '') {
                errorEl.text('Email wajib diisi.');
            } else if (!emailPattern.test(value)) {
                errorEl.text('Format email tidak valid.');
            } else {
                errorEl.text('');
            }
        });

        $('#phone').on('input', function() {
            let value = $(this).val();
            let errorEl = $(this).closest('.input-register-form').find('.error-text');

            if (!/^\d*$/.test(value)) {
                errorEl.text('Nomor telepon hanya boleh angka, tanpa simbol.');
                $(this).val(value.replace(/\D/g, ''));
                return;
            }

            if (value.length > 15) {
                errorEl.text('Nomor telepon maksimal 15 digit.');
                $(this).val(value.slice(0, 15));
                return;
            }

            errorEl.text('');
        });

        $(document).on('submit', '#registerForm', function(e) {
            e.preventDefault();
            valid = true;

            $('#registerForm input').each(function() {
                let input = $(this);
                let label = input.data('label');
                let errorEl = input.closest('.input-register-form').find('.error-text');
                let checkbox = $('#validasi');

                if ($.trim(input.val()) === '' || !checkbox.is(':checked')) {
                    errorEl.text('Data ' + label + ' wajib diisi.');
                    valid = false;
                } else {
                    errorEl.text('');
                }
            });

            if (valid) {
                this.submit();
            }
        });
    </script>
@endsection
