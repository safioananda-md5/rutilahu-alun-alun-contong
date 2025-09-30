@extends('layouts.master')

@section('content')
    <section class="checkout-page mt-5">
        <div class="container">
            <h2 class="mb-1">Formulir Pengajuan Baru</h2>
            <i><span style="color: red;">*</span>Menandakan bahwa kolom ini wajib diisi atau dipilih.</i>
            <h5 class="mt-4">Data Diri Pemohon</h5>
            <hr>
            <div class="row">
                <div class="col-md-3 fw-bold">Nama Lengkap</div>
                <div class="col-md-9">{{ Auth::user()->name }}</div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">NIK</div>
                <div class="col-md-9 d-flex align-items-center">{{ substr(Auth::user()->nik, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                        data-height="20"></span>
                </div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">No. KK</div>
                <div class="col-md-9">{{ substr(Auth::user()->no_kk, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                        data-height="20"></span>
                </div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">Alamat KK</div>
                <div class="col-md-9">{{ Auth::user()->regency }}</div>
            </div>
            <div class="row mt-3 mt-md-0">
                <div class="col-md-3 fw-bold">Status Keluarga Miskin</div>
                <div class="col-md-9">
                    @if (Auth::user()->poor_family_status === 'non-gamis')
                        <span class="badge bg-danger">{{ Str::upper(Auth::user()->poor_family_status) }}</span>
                    @else
                        <span class="badge bg-success">{{ Str::upper(Auth::user()->poor_family_status) }}</span>
                    @endif
                </div>
            </div>
            <form action="{{ route('store_formulir_pengajuan') }}" method="POST" class="billing_details_form"
                id="submissionForm" novalidate>
                @csrf
                <div class="your_order">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="billing_details">
                                <h5 class="mt-5">Alamat Domisili Pemohon</h5>
                                <hr>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-8">
                                        <label for="address" class="mb-2 fw-bold">
                                            Alamat Domisili<span style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <small class="text-danger">Pastikan alamat domisili berada di Kel. Alun-Alun
                                                Contong, Kec. Bubutan, Kota Surabaya.</small>
                                            <input type="text" name="address" data-label="Alamat Domisili"
                                                placeholder="Jl. Bubutan V No. 19, Kelurahan Alun-Alun Contong, Kecamatan Bubutan, Kota Surabaya">
                                            <span class="error-text text-danger"></span>
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_rt" class="mb-2 fw-bold">
                                            RT<span style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" data-label="RT" name="no_rt" placeholder="00">
                                            <span class="error-text text-danger"></span>
                                            @error('no_rt')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="no_rw" class="mb-2 fw-bold">
                                            RW<span style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="no_rw" data-label="RW" placeholder="00">
                                            <span class="error-text text-danger"></span>
                                            @error('no_rw')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->poor_family_status === 'non-gamis')
                                    <h5 class="mt-3">Data Sosial Ekonomi Pemohon</h5>
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="revenue" class="mb-2 fw-bold">
                                                Jumlah Pendapatan <small>(dalam rupiah)</small><span
                                                    style="color: red;">*</span>
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Dihitung melalui penghasilan kepala keluarga.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box">
                                                <input type="text" class="money" name="revenue"
                                                    data-label="Jumlah Pendapatan" placeholder="1.000.000">
                                                <span class="error-text text-danger"></span>
                                                @error('revenue')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="asset" class="mb-2 fw-bold">
                                                Jumlah Kepemilikan Asset <small>(dalam rupiah)</small><span
                                                    style="color: red;">*</span>
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Jumlah asset dinilai melalui total harga jual masing-masing asset seperti; tanah, kendaraan, alat usaha, peralatan elektronik, atau perhiasan.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box">
                                                <input type="text" class="money" name="asset"
                                                    data-label="Jumlah Kepemilikan Asset" value=""
                                                    placeholder="1.000.000">
                                                <span class="error-text text-danger"></span>
                                                @error('asset')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dependents" class="mb-2 fw-bold">
                                                Jumlah Tanggungan Anggota Keluarga<span style="color: red;">*</span>
                                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                    data-bs-trigger="hover focus"
                                                    data-bs-content="Tanggungan anggota keluarga mencakup anak-anak, lansia, atau anggota keluarga yang tidak bekerja dan bergantung hanya kepada kepala keluarga.">
                                                    <i class="fas fa-info-circle ms-2 text-primary"></i>
                                                </span>
                                            </label>
                                            <div class="billing_input_box">
                                                <input type="number" name="dependents"
                                                    data-label="Jumlah Tanggungan Angota Keluarga" value=""
                                                    placeholder="0">
                                                <span class="error-text text-danger"></span>
                                                @error('dependents')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <h5 class="mt-3">Data Bangunan Pemohon</h5>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="building_area" class="mb-2 fw-bold">
                                            Luas Bangunan <small>(dalam m<sup>2</sup>)</small><span
                                                style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="building_area" data-label="Luas Bangunan"
                                                value="" placeholder="0">
                                            <span class="error-text text-danger"></span>
                                            @error('building_area')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="building_legality" class="mb-2 fw-bold">
                                            Legalitas Bangunan<span style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select" name="building_legality"
                                                    data-label="Legalitas bangunan">
                                                    <option value="">-- Pilih Jenis Hak Milik
                                                        --
                                                    </option>
                                                    @foreach ($Legalitas as $LegalitasItem)
                                                        <option value="{{ $LegalitasItem['value'] }}">
                                                            {{ $LegalitasItem['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error-text text-danger"></span>
                                                @error('building_legality')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="roof_condition" class="mb-2 fw-bold">
                                            Kondisi Atap Bangunan<span style="color: red;">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-html="true"
                                                data-bs-content="
                                                <div>Rusak ringan: genteng bocor, pecah, genteng sebagian;</div>
                                                <div style='margin-top:10px;'>Rusak sedang: rangka kayu lapuk / keropos, atap asbes / seng;</div>
                                                <div style='margin-top:10px;'>Rusak berat: roboh, tidak memiliki atap.</div>
                                            ">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select" name="roof_condition"
                                                    data-label="Kondisi Atap Bangunan">
                                                    <option value="">-- Pilih Kondisi Atap --
                                                    </option>
                                                    @foreach ($Katap as $KatapItem)
                                                        <option value="{{ $KatapItem['value'] }}">
                                                            {{ $KatapItem['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error-text text-danger"></span>
                                                @error('roof_condition')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="wall_condition" class="mb-2 fw-bold">
                                            Kondisi Dinding Bangunan<span style="color: red;">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select" name="wall_condition"
                                                    data-label="Kondisi Dinding Bangunan">
                                                    <option value="">-- Pilih Kondisi Dinding
                                                        --
                                                    </option>
                                                    @foreach ($Kdinding as $KdindingItem)
                                                        <option value="{{ $KdindingItem['value'] }}">
                                                            {{ $KdindingItem['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error-text text-danger"></span>
                                                @error('wall_condition')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="floor_condition" class="mb-2 fw-bold">
                                            Kondisi Lantai Bangunan<span style="color: red;">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-html="true"
                                                data-bs-content="Lantai rendah adalah kondisi dimana lantai terlihat tidak rata/ bergelombang, berpotensi terendam banjir, dan berada dibawah ketinggian jalan.">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select" name="floor_condition"
                                                    data-label="Kondisi Lantai Bangunan">
                                                    <option value="">-- Pilih Kondisi Lantai --
                                                    </option>
                                                    @foreach ($Klantai as $KlantaiItem)
                                                        <option value="{{ $KlantaiItem['value'] }}">
                                                            {{ $KlantaiItem['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error-text text-danger"></span>
                                                @error('floor_condition')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-5">
                                <h2 class="mb-5">Unggah Dokumen Terkait</h2>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="certificate_of_domicile" class="fw-bold">
                                                Surat Keterangan Domisili yang diterbitkan oleh Kelurahan Alun-Alun
                                                Contong<span style="color: red;">*</span>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="certificate_of_domicile"
                                                    data-label="Surat Keterangan Domisili" accept="application/pdf">
                                            </div>
                                            <span class="error-text text-danger"></span>
                                            @error('certificate_of_domicile')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="certificate_of_ownership" class="fw-bold">
                                                Unggah Serfikat Hak Milik<span style="color: red;">*</span>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control"
                                                    name="certificate_of_ownership" data-label="Sertifikat Hak Milik"
                                                    accept="application/pdf">
                                            </div>
                                            <span class="error-text text-danger"></span>
                                            @error('certificate_of_ownership')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h2 class="my-5">Unggah Dokumen Pernyataan</h2>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_nodispute" class="fw-bold">
                                                Surat Pernyataan (bermaterai) rumah/tanah tidak dalam sengketa dan akan
                                                menghuni sendiri rumah yang diperbaiki<span style="color: red;">*</span>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="statement_of_nodispute"
                                                    data-label="Penyataan Rumah Tidak Dalam Sengketa"
                                                    accept="application/pdf">
                                            </div>
                                            <span class="error-text text-danger"></span>
                                            @error('statement_of_nodispute')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_neverreceivedassistance" class="fw-bold">
                                                Surat Pernyataan (bermaterai) belum pernah menerima bantuan perbaikan rumah
                                                dari Pemerintah <small>(di kecualikan untuk pembuatan jamban sehat dan
                                                    bencana)</small><span style="color: red;">*</span>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control"
                                                    name="statement_of_neverreceivedassistance"
                                                    data-label="Pernyataan Belum Pernah Menerima Bantuan Rutilahu"
                                                    accept="application/pdf">
                                            </div>
                                            <span class="error-text text-danger"></span>
                                            @error('statement_of_neverreceivedassistance')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_sellthehouse" class="fw-bold">
                                                Surat Pernyataan (bermaterai) kesediaan tidak menjual atau menyewakan rumah
                                                hasil rehabilitasi dalam kurun waktu 5 (lima) Tahun<span
                                                    style="color: red;">*</span>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control"
                                                    name="statement_of_sellthehouse"
                                                    data-label="Pernyataan Tidak Menjual Rumah" accept="application/pdf">
                                            </div>
                                            <span class="error-text text-danger"></span>
                                            @error('statement_of_sellthehouse')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="billing_input_box">
                                            <label for="statement_of_incomebelowminimumwage" class="fw-bold">
                                                Surat Pernyataan (bermaterai) pendapatan keluarga dibawah UMK <small>(khusus
                                                    keluarga miskin dan pramiskin)</small>
                                            </label><br>
                                            <small class="m-0 p-0 mb-2">Format dokumen .pdf</small>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control"
                                                    name="statement_of_incomebelowminimumwage" accept="application/pdf">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="true"
                                                name="CheckTrueData" data-label="Pernyataan Seluruh Isian Benar"
                                                id="CheckTrueData">
                                            <label class="form-check-label" style="text-align: justify"
                                                for="CheckTrueData">
                                                Saya menyatakan bahwa seluruh data dan
                                                informasi yang saya isikan adalah benar, jujur, dan sesuai dengan keadaan
                                                yang sebenarnya. Apabila di kemudian hari ditemukan ketidaksesuaian atau
                                                ketidakbenaran data, saya bersedia menanggung segala akibat dan sanksi yang
                                                ditetapkan oleh pihak yang berwenang.
                                            </label>
                                            <span class="error-text text-danger"></span>
                                            @error('CheckTrueData')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right d-flex justify-content-end mt-5">
                    <a href="{{ route('pengajuan') }}" class="thm-btn-danger">Batalkan</a>
                    <button type="submit" class="btn thm-btn-success ms-3" id="submit">Ajukan Formulir</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.css">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script>
        $('.nice-select').select2({
            minimumResultsForSearch: Infinity,
            dropdownCssClass: "minimal-scrollbar"
        });

        $(document).on('click', '.open', function() {
            let head = $(this).closest('.col-md-9');
            let type = $(this).closest('.row').find('.fw-bold').text();
            head.empty();
            if (type === 'NIK') {
                head.html(`
                    {{ Auth::user()->nik }}
                    <span class="iconify close ms-3" style="cursor: pointer;" data-icon="mdi:eye-off" data-width="20"
                        data-height="20"></span>
                `);
            } else {
                head.html(`
                    {{ Auth::user()->no_kk }}
                    <span class="iconify close ms-3" style="cursor: pointer;" data-icon="mdi:eye-off" data-width="20"
                        data-height="20"></span>
                `);
            }

        });

        $(document).on('click', '.close', function() {
            let head = $(this).closest('.col-md-9');
            let type = $(this).closest('.row').find('.fw-bold').text();
            head.empty();
            if (type === 'NIK') {
                head.html(`
                    {{ substr(Auth::user()->nik, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                            data-height="20"></span> 
                `);
            } else {
                head.html(`
                    {{ substr(Auth::user()->no_kk, 0, 4) . str_repeat('*', 12) }}
                    <span class="iconify open ms-3" style="cursor: pointer;" data-icon="mdi:eye" data-width="20"
                            data-height="20"></span> 
                `);
            }

        });

        $(document).on('input', '.money', function() {
            let value = $(this).val();
            value = value.replace(/\D/g, "");
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            $(this).val(value);
        });
        $(document).on('submit', '#submissionForm', function(e) {
            e.preventDefault();

            $('#submit')
                .prop('disabled', true)
                .text('Mengajukan...')
                .css({
                    'cursor': 'not-allowed',
                    'opacity': '0.6'
                });

            $('#submissionForm input[type="text"]').each(function() {
                let input = $(this);
                let label = input.data('label');
                let errorEl = input.closest('.billing_input_box').find('.error-text');

                if ($.trim(input.val()) === '') {
                    errorEl.text('Data ' + label + ' wajib diisi.');
                    valid = false;
                } else {
                    errorEl.text('');
                    valid = true;
                }
            });

            $('#submissionForm input[type="number"]').each(function() {
                let input = $(this);
                let label = input.data('label');
                let errorEl = input.closest('.billing_input_box').find('.error-text');

                if ($.trim(input.val()) === '') {
                    errorEl.text('Data ' + label + ' wajib diisi.');
                    valid = false;
                } else {
                    errorEl.text('');
                    valid = true;
                }
            });

            $('#submissionForm select').each(function() {
                let select = $(this);
                let label = select.data('label');
                let errorEl = select.closest('.billing_input_box').find('.error-text');

                if ($.trim(select.val()) === '' || select.val() === null) {
                    errorEl.text('Data ' + label + ' wajib dipilih.');
                    valid = false;
                } else {
                    errorEl.text('');
                }
            });

            $('#submissionForm input[type="file"]').each(function() {
                let fileInput = $(this);
                let label = fileInput.data('label');
                let errorEl = fileInput.closest('.billing_input_box').find('.error-text');

                if (fileInput.get(0).files.length === 0) {
                    errorEl.text('Data ' + label + ' wajib diunggah.');
                    valid = false;
                } else {
                    errorEl.text('');
                }
            });

            $('#submissionForm input[type="checkbox"]').each(function() {
                let checkbox = $(this);
                let label = checkbox.data('label');
                let errorEl = checkbox.closest('.form-check').find('.error-text');

                if (!checkbox.is(':checked')) {
                    errorEl.text('Data ' + label + ' wajib dicentang.');
                    valid = false;
                } else {
                    errorEl.text('');
                }
            });

            if (valid) {
                $(this).submit();
            } else {
                $('#submit')
                    .prop('disabled', false)
                    .text('Ajukan Formulir')
                    .css({
                        'cursor': 'pointer',
                        'opacity': '1'
                    });
                flasher.error('Terdapat data isian kosong.');
            }
        });
    </script>
@endsection
