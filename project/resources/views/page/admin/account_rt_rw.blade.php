@extends('layouts.admin')
@section('title', 'Daftar Akun RT / RW')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Akun RT / RW</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Akun RT / RW</li>
        </ul>
    </div>

    <div class="card basic-data-table mt-5">
        <div class="card-header sticky-header">
            <h5 class="card-title mb-0">Data Akun</h5>
            <small class="fst-italic">Setiap perubahan yang Anda lakukan akan otomatis disimpan
                ketika Anda selesai mengisi sebuah kolom.</small>
        </div>
        {{-- is-valid --}}
        <div class="card-body scrollable-body">
            @foreach ($dataRW as $RW->indexdataRW => $RW)
                <h6>RW {{ $RW->number }}</h6>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Nama RW {{ $RW->number }}
                                @if ($RW->user->system_verified_status === 'unverified')
                                    <small class="text-danger status">Akun
                                        non-aktif</small>
                                @else
                                    <small class="text-success status">Akun aktif | email
                                        :{{ $RW->user->email }} | <span class="text-danger reset"
                                            style="cursor: pointer;">reset password</span></small>
                                @endif
                            </label>
                            @if ($RW->user->name === '[none]')
                                <input type="text" class="form-control is-invalid input" id="rw{{ $RW->number }}"
                                    data-label="name" placeholder="Masukkan Nama RW {{ $RW->number }}">
                            @else
                                <input type="text" class="form-control is-valid input" id="rw{{ $RW->number }}"
                                    data-label="name" placeholder="Masukkan Nama RW {{ $RW->number }}"
                                    value="{{ $RW->user->name }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">No. Telepon RW
                                {{ $RW->number }}</label>
                            @if ($RW->user->phone === '[none' . $RW->number . ']')
                                <input type="text" class="form-control phone is-invalid input"
                                    id="norw{{ $RW->number }}" data-label="phone"
                                    placeholder="081{{ $RW->number }}....">
                            @else
                                <input type="text" class="form-control is-valid phone input"
                                    id="norw{{ $RW->number }}" data-label="phone"
                                    placeholder="081{{ $RW->number }}...." value="{{ $RW->user->phone }}">
                            @endif
                        </div>
                    </div>
                </div>
                @foreach ($dataRT as $indexdataRT => $RT)
                    @if ($RT->parent === 'RW' . $RW->number)
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">Nama RW
                                        {{ $RW->number }} RT {{ $RT->number }}
                                        @if ($RT->user->system_verified_status === 'unverified')
                                            <small class="text-danger status">Akun
                                                non-aktif</small>
                                        @else
                                            <small class="text-success status">Akun aktif | email
                                                :{{ $RT->user->email }} | <span class="text-danger reset"
                                                    style="cursor: pointer;">reset password</span></small>
                                        @endif
                                    </label>
                                    @if ($RT->user->name === '[none]')
                                        <input type="text" class="form-control is-invalid input"
                                            id="rw{{ $RW->number }}rt{{ $RT->number }}" data-label="name"
                                            placeholder="Masukkan Nama RW {{ $RW->number }} RT {{ $RT->number }}">
                                    @else
                                        <input type="text" class="form-control is-valid input"
                                            id="rw{{ $RW->number }}rt{{ $RT->number }}" data-label="name"
                                            placeholder="Masukkan Nama RW {{ $RW->number }} RT {{ $RT->number }}"
                                            value="{{ $RT->user->name }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label">No.
                                        Telepon RW {{ $RW->number }} RT {{ $RT->number }}</label>
                                    @if ($RT->user->phone === '[none' . $RW->number . $RT->number . ']')
                                        <input type="text" class="form-control phone is-invalid input" data-label="phone"
                                            id="norw{{ $RW->number }}rt{{ $RT->number }}"
                                            placeholder="081{{ $RW->number }}{{ $RT->number }}....">
                                    @else
                                        <input type="text" class="form-control is-valid phone input"
                                            id="norw{{ $RW->number }}rt{{ $RT->number }}" data-label="phone"
                                            placeholder="081{{ $RW->number }}{{ $RT->number }}...."
                                            value="{{ $RT->user->phone }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                @if (!$loop->last)
                    <hr class="mb-3 mt-5">
                @endif
            @endforeach
        </div>
        <div class="card-footer py-3 mt-3 text-end">
            <a href="{{ route('admin.dashboard_admin') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .form-control::placeholder {
            color: #9ca3af !important;
            opacity: 1 !important;
        }

        /* Prefix untuk cross-browser */
        .form-control::-webkit-input-placeholder {
            color: #9ca3af !important;
            opacity: 1 !important;
        }

        .form-control:-ms-input-placeholder {
            color: #9ca3af !important;
            opacity: 1 !important;
        }

        .form-control::-ms-input-placeholder {
            color: #9ca3af !important;
            opacity: 1 !important;
        }

        .sf-title {
            font-size: 1.75em !important;
            font-weight: bold !important;
            margin: 0 !important;
        }
    </style>
@endsection

@section('script')
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).on('input', '.phone', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        let oldValue = "";
        $(document).ready(function() {
            $(document).on('focus', '.input', function() {
                oldValue = $(this).val();
            });

            $(document).on('blur', '.input', function() {
                var input = $(this);
                var value = $(this).val();
                var id = $(this).prop('id');

                var formData = new FormData();
                formData.append('_method', 'PUT'); // memberitahu Laravel ini PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('id', id);

                if (value) {
                    formData.append('value', value);
                    $.ajax({
                        url: '{{ route('admin.account.update_RTRW') }}', // route Laravel PUT
                        type: 'POST', // tetap POST, Laravel mengenali lewat _method
                        data: formData,
                        processData: false, // wajib false saat pakai FormData
                        contentType: false, // wajib false saat pakai FormData
                        success: function(response) {
                            if (response.status === 1) {
                                input.removeClass('is-invalid').addClass('is-valid');
                                if (response.verify) {
                                    let statusACC = input.closest('.row').find('.status');
                                    if (statusACC.length) {
                                        statusACC.removeClass('text-danger').addClass(
                                            'text-success');
                                        statusACC.html(`Akun aktif | email :` + response
                                            .email + ` | <span class="text-danger"
                                                    style="cursor: pointer;">reset password</span>`);
                                    }
                                }
                                flasher.success(response.message);
                            } else {
                                input.val(oldValue);
                                flasher.error('Terdapar error pada inputan.');
                            }
                        },
                        error: function(xhr) {
                            input.val(oldValue);
                            flasher.error(
                                'Terdapar error pada inputan. | Kemungkinan No. Telepon sudah digunakan'
                            );
                        }
                    });
                } else {
                    formData.append('value', '[none]');
                    $.ajax({
                        url: '{{ route('admin.account.update_RTRW') }}', // route Laravel PUT
                        type: 'POST', // tetap POST, Laravel mengenali lewat _method
                        data: formData,
                        processData: false, // wajib false saat pakai FormData
                        contentType: false, // wajib false saat pakai FormData
                        success: function(response) {
                            if (response.status === 1) {
                                input.removeClass('is-valid').addClass('is-invalid');
                                if (!response.verify) {
                                    let statusACC = input.closest('.row').find('.status');
                                    if (statusACC.length) {
                                        statusACC.removeClass('text-success').addClass(
                                            'text-danger');
                                        statusACC.text('Akun non-aktif');
                                    }
                                }
                                flasher.success(response.message);
                            } else {
                                console.log(oldValue)
                                flasher.error('Terdapar error pada inputan.');
                            }
                        },
                        error: function(xhr) {
                            input.val(oldValue);
                            flasher.error(
                                'Terdapar error pada inputan. | Kemungkinan No. Telepon sudah digunakan'
                            );
                        }
                    });
                }
            });

            $(document).on('click', '.reset', function() {
                var reset = $(this);
                var id = $(this).closest('.col-md-6').find('.input').prop('id');
                let textC = "";
                let textD = "";

                var formData = new FormData();
                formData.append('_method', 'PUT'); // memberitahu Laravel ini PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('id', id);

                if (id.length === 3) {
                    textC = "Data password RW " + id.charAt(2) + " akan diubah ke awal!";
                    textD = "Data password RW " + id.charAt(2) + " berhasil direset.";
                } else {
                    textC = "Data password RW " + id.charAt(2) + " RT " +
                        id.charAt(5) +
                        " akan diubah ke awal!";
                    textD = "Data password RW " + id.charAt(2) + " RT " +
                        id.charAt(5) +
                        " berhasil direset.";
                }
                Swal.fire({
                    title: 'Ingin reset password?',
                    text: textC,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Reset',
                    cancelButtonText: 'Batal',
                    customClass: {
                        title: 'sf-title',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('admin.account.reserPWD_RTRW') }}', // route Laravel PUT
                            type: 'POST', // tetap POST, Laravel mengenali lewat _method
                            data: formData,
                            processData: false, // wajib false saat pakai FormData
                            contentType: false, // wajib false saat pakai FormData
                            success: function(response) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: textD,
                                    icon: 'success',
                                    confirmButtonText: 'Tutup',
                                    customClass: {
                                        title: 'sf-title',
                                    }
                                });
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat memproses data.',
                                    icon: 'error',
                                    confirmButtonText: 'Tutup',
                                    customClass: {
                                        title: 'sf-title',
                                    }
                                });
                            }
                        });
                    }
                });
            })
        });
    </script>
@endsection
