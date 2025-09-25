@extends('layouts.auth')
@section('title', 'Buat Akun | Rutilahu Alun-Alun Contong Kota Surabaya')
@section('content')
    <section class="sign-in mt-5" style="text-align: justify;">
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
                                @error('full_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="nik" class="mb-2 fw-bold">
                                NIK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="number" placeholder="NIK" id="nik" data-label="NIK" name="nik">
                                <span class="error-text text-danger"></span>
                                @error('nik')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="no_kk" class="mb-2 fw-bold">
                                No. KK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="number" placeholder="No. KK" id="no_kk" data-label="No. KK"
                                    name="no_kk">
                                <span class="error-text text-danger"></span>
                                @error('no_kk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="email" class="mb-2 fw-bold">
                                Email<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="email" placeholder="Email" id="email" data-label="Email" name="email"
                                    autocomplete="username">
                                <div class="error-text text-danger"></div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-muted" style="font-size: 14px"><i class="fas fa-circle-info"></i> Pastikan
                                    email yang Anda masukkan benar dan dapat diakses untuk menerima tautan
                                    verifikasi.</span>
                            </div>
                            <label for="phone" class="mb-2 fw-bold">
                                No. Telepon (WhatsApp)<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="text" placeholder="No. Telepon (Whatsapp)" data-label="No. Telepon"
                                    id="phone" name="phone">
                                <div class="error-text text-danger"></div>
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <span class="text-muted" style="font-size: 14px"><i class="fas fa-circle-info"></i> Pastikan
                                    nomor telepon yang Anda masukkan aktif agar dapat menerima notifikasi melalui
                                    WhatsApp.</span>
                            </div>
                            <label for="password" class="mb-2 fw-bold">
                                Password<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="password" name="password" placeholder="Password" data-label="Password"
                                    id="password" autocomplete="new-password">
                                <span class="error-text text-danger"></span>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="password_confirmation" class="mb-2 fw-bold">
                                Konfirmasi Password<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box input-register-form">
                                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
                                    data-label="Konfirmasi Password" id="password_confirmation" autocomplete="new-password">
                                <span class="error-text text-danger"></span>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            <h4 class="mb-4">Upload Bukti Kependudukan</h4>
                            <label for="foto_ktp" class="mb-2 fw-bold">
                                Unggah Foto KTP <span class="text-danger">*</span>
                            </label>
                            <div class="input-register-form">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" data-label="Foto KTP" id="foto_ktp"
                                        name="foto_ktp" accept=".jpg,.jpeg,.png">
                                </div>
                                <span class="error-text text-danger"></span>
                                @error('foto_ktp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="foto_ktp" class="mb-2 fw-bold">
                                Unggah Foto Selfi Dengan KTP <span class="text-danger">*</span>
                            </label>
                            <div class="input-register-form">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" data-label="Selfi Dengan KTP"
                                        id="foto_selfi_ktp" name="foto_selfi_ktp" accept=".jpg,.jpeg,.png">
                                </div>
                                <span class="error-text text-danger"></span>
                                @error('foto_selfi_ktp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="foto_kk" class="mb-2 fw-bold">
                                Unggah Foto KK <span class="text-danger">*</span>
                            </label>
                            <div class="input-register-form">
                                <div class="input-group mb-3 ">
                                    <input type="file" class="form-control" data-label="Foto KK" id="foto_kk"
                                        name="foto_kk" accept=".jpg,.jpeg,.png">
                                </div>
                                <span class="error-text text-danger"></span>
                                @error('foto_kk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
                                    @error('validasi')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center align-items-center">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                        data-callback="recaptchaSuccess" data-expired-callback="recaptchaExpired">>
                                    </div>
                                    <small class="error-text text-danger" id="recaptcha-error"></small>
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
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });

        let valid = false;

        function recaptchaSuccess() {
            valid = true;
            $(document).find('.sign-in__form-btn-box').empty();
            $(document).find('.sign-in__form-btn-box').append(
                `<button type="submit" class="thm-btn sign-in__form-btn">Daftar</button>`);
        }

        function recaptchaExpired() {
            valid = false;
            $('#recaptcha-error').text('Silakan verifikasi ulang, reCAPTCHA telah kedaluwarsa.');
        }

        function validatePassword() {
            let password = $('#password').val();
            let errorEl = $('#password').closest('.input-register-form').find('.error-text');
            let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

            if (!regex.test(password)) {
                errorEl.text('Password minimal 8 karakter, termasuk huruf besar, huruf kecil, angka, dan simbol.');
                return false;
            } else {
                errorEl.text('');
                return true;
            }
        }

        function validatePasswordConfirmation() {
            let password = $('#password').val();
            let confirm = $('#password_confirmation').val();
            let errorEl = $('#password_confirmation').closest('.input-register-form').find('.error-text');

            if (password !== confirm) {
                errorEl.text('Konfirmasi password tidak sama dengan password.');
                return false;
            } else {
                errorEl.text('');
                return true;
            }
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

        $('#password, #password_confirmation').on('input', function() {
            validatePassword();
            validatePasswordConfirmation();
        });

        $(document).on('submit', '#registerForm', function(e) {
            e.preventDefault();

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
                    valid = true;
                }
            });

            if (valid) {
                let formData = new FormData(this);

                $('.sign-in__form-btn')
                    .prop('disabled', true)
                    .text('Loading...')
                    .css({
                        'cursor': 'not-allowed',
                        'opacity': '0.6'
                    });

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        window.location.href = response.redirect;
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON?.errors || {};

                        for (let field in errors) {
                            let input = $(`[name="${field}"]`);
                            let errorEl = input.closest('.input-register-form').find('.error-text');
                            errorEl.text(errors[field][0]);
                        }

                        grecaptcha.reset();
                        let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                        flasher.error(msg);
                    }
                });
            } else {
                grecaptcha.reset();
                flasher.error('Terdapat data isian kosong.');
            }
        });
    </script>
@endsection
