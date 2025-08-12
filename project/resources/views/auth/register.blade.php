@extends('layouts.auth')

@section('content')
    <section class="sign-in mt-5">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="sign-in__single">
                        <h3 class="sign-in__title text-center">Daftar Akun</h3>
                        <form class="sign-in__form text-left" method="post" id="registerForm"
                            action="{{ route('register.store') }}" enctype="multipart/form-data">
                            <label for="full_name" class="mb-2 fw-bold">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="text" placeholder="Nama lengkap" id="full_name" name="full_name">
                                <span class="error-text full_name_error text-danger"></span>
                            </div>
                            <label for="nik" class="mb-2 fw-bold">
                                NIK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="number" placeholder="NIK" id="nik" name="nik">
                                <span class="error-text nik_error text-danger"></span>
                            </div>
                            <label for="no_kk" class="mb-2 fw-bold">
                                No. KK <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="number" placeholder="No. KK" id="no_kk" name="no_kk">
                                <span class="error-text no_kk_error text-danger"></span>
                            </div>
                            <label for="email" class="mb-2 fw-bold">
                                Email<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="email" placeholder="Email" id="email" name="email">
                                <span class="error-text email_error text-danger"></span>
                            </div>
                            <label for="phone" class="mb-2 fw-bold">
                                No. Telepon (WhatsApp)<span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="text" placeholder="No. Telepon (Whatsapp)" id="phone" name="phone">
                                <span class="error-text phone_error text-danger"></span>
                            </div>
                            <label for="address" class="mb-2 fw-bold">
                                Alamat <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="text" placeholder="Alamat" id="address" name="address">
                                <span class="error-text address_error text-danger"></span>
                            </div>
                            <label for="province" class="mb-2 fw-bold">
                                Provinsi <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <select class="wide select2" name="province" id="province" style="width: 100%">
                                    <option data-display="Memuat daftar provinsi...">Memuat daftar provinsi...</option>
                                </select>
                                <span class="error-text province_error text-danger"></span>
                            </div>
                            <label for="city" class="mb-2 fw-bold">
                                Kota <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <select class="wide select2" id="city" name="city" style="width: 100%">
                                    <option data-display="Memuat daftar kota...">Memuat daftar kota...</option>
                                </select>
                                <span class="error-text city_error text-danger"></span>
                            </div>
                            <label for="district" class="mb-2 fw-bold">
                                Kecamatan <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <select class="wide select2" id="district" name="district" style="width: 100%">
                                    <option data-display="Memuat daftar kecamatan...">Memuat daftar kecamatan...</option>
                                </select>
                                <span class="error-text district_error text-danger"></span>
                            </div>
                            <label for="village" class="mb-2 fw-bold">
                                Kelurahan <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <select class="wide select2" id="village" name="village" style="width: 100%">
                                    <option data-display="Memuat daftar kelurahan...">Memuat daftar kelurahan...</option>
                                </select>
                                <span class="error-text village_error text-danger"></span>
                            </div>
                            <label for="rt" class="mb-2 fw-bold">
                                RT <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="number" placeholder="RT" id="rt" name="rt">
                                <span class="error-text rt_error text-danger"></span>
                            </div>
                            <label for="rw" class="mb-2 fw-bold">
                                RW <span class="text-danger">*</span>
                            </label>
                            <div class="sign-in__form-input-box">
                                <input type="number" placeholder="RW" id="rw" name="rw">
                                <span class="error-text rw_error text-danger"></span>
                            </div>
                            <hr>
                            <h4 class="mb-4">Upload Bukti Kependudukan</h4>
                            <label for="foto_ktp" class="mb-2 fw-bold">
                                Unggah Foto KTP <span class="text-danger">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="foto_ktp" name="foto_ktp">
                                <span class="error-text foto_ktp_error text-danger"></span>
                            </div>
                            <label for="foto_kk" class="mb-2 fw-bold">
                                Unggah Foto KK <span class="text-danger">*</span>
                            </label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="foto_kk" name="foto_kk">
                                <span class="error-text foto_kk_error text-danger"></span>
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
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox" name="validasi" id="validasi">
                                    </div>
                                    <div class="col-11">
                                        <label for="validasi">Dengan ini saya menyatakan bahwa seluruh data
                                            yang saya
                                            isikan dalam proses registrasi adalah benar, jujur, dan sesuai dengan keadaan
                                            sebenarnya. Saya bersedia bertanggung jawab atas kebenaran data
                                            tersebut.</label>
                                    </div>
                                    <span class="error-text validasi_error text-danger"></span>
                                </div>


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

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#province').select2();
            $('#city').select2();
            $('#district').select2();
            $('#village').select2();

            // Select province and load cities
            $.ajax({
                url: '/provinces',
                method: 'GET',
                success: function(data) {
                    let $province = $('#province');
                    $province.empty(); // Kosongkan dulu
                    $province.append('<option value="">Pilih Provinsi</option>');
                    data.forEach(function(item) {
                        $province.append('<option value="' + item.code + '">' + item.name +
                            '</option>');
                    });
                },
                error: function() {
                    alert('Gagal mengambil data provinsi');
                }
            });

            // Select city and load districts
            $('#province').on('change', function() {
                let provinceCode = $(this).val(); // Ambil value provinsi terpilih
                let $city = $('#city');
                let $districts = $('#district');
                let $village = $('#village');

                // Reset city setiap province berubah
                $city.empty().append('<option value="">Memuat daftar kota...</option>');
                $districts.empty().append('<option value="">Memuat daftar kecamatan...</option>');
                $village.empty().append('<option value="">Memuat daftar kelurahan...</option>');

                if (provinceCode) {
                    $.ajax({
                        url: '/cities/' + provinceCode,
                        method: 'GET',
                        success: function(data) {
                            let $cities = $('#city');
                            $cities.empty(); // Kosongkan dulu
                            $cities.append('<option value="">Pilih Kota</option>');
                            data.forEach(function(item) {
                                $cities.append('<option value="' + item.code + '">' +
                                    item.name +
                                    '</option>');
                            });
                        },
                        error: function() {
                            alert('Gagal mengambil data kota');
                        }
                    });
                }
            });

            // Select district and load villages
            $('#city').on('change', function() {
                let cityCode = $(this).val(); // Ambil value kota terpilih
                // console.log(cityCode);
                let $districts = $('#district');
                let $village = $('#village');

                $districts.empty().append('<option value="">Memuat daftar kecamatan...</option>');
                $village.empty().append('<option value="">Memuat daftar kelurahan...</option>');

                if (cityCode) {
                    $.ajax({
                        url: '/district/' + cityCode,
                        method: 'GET',
                        success: function(data) {
                            let $district = $('#district');
                            $district.empty(); // Kosongkan dulu
                            $district.append('<option value="">Pilih Kecamatan</option>');
                            data.forEach(function(item) {
                                $district.append('<option value="' + item.code + '">' +
                                    item.name +
                                    '</option>');
                            });
                        },
                        error: function() {
                            alert('Gagal mengambil data kecamatan');
                        }
                    });
                }
            });

            // Select village
            $('#district').on('change', function() {
                let districtsCode = $(this).val(); // Ambil value kota terpilih
                // console.log(cityCode);
                let $village = $('#village');

                $village.empty().append('<option value="">Memuat daftar kelurahan...</option>');

                if (districtsCode) {
                    $.ajax({
                        url: '/village/' + districtsCode,
                        method: 'GET',
                        success: function(data) {
                            let $village = $('#village');
                            $village.empty(); // Kosongkan dulu
                            $village.append('<option value="">Pilih Kelurahan</option>');
                            data.forEach(function(item) {
                                $village.append('<option value="' + item.code + '">' +
                                    item.name +
                                    '</option>');
                            });
                        },
                        error: function() {
                            alert('Gagal mengambil data kelurahan');
                        }
                    });
                }
            });


            // Form submission with AJAX
        });
    </script>
@endsection
