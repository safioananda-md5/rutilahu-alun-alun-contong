@extends('layouts.master')

@section('content')
    <section class="checkout-page mt-5">
        <div class="container">
            <div class="your_order">
                <h2 class="mb-5">Formulir Pengajuan Baru</h2>
                <h5>Data Diri Pemohon</h5>
                <hr>
                <table class="order_table_detail">
                    <tbody>
                        <tr>
                            <td class="pro__title">Nama Lengkap</td>
                            <td class="pro__price">Kharisma Safio Ananda</td>
                        </tr>
                        <tr>
                            <td class="pro__title">NIK</td>
                            <td class="pro__price">357813*****</td>
                        </tr>
                        <tr>
                            <td class="pro__title">No. KK</td>
                            <td class="pro__price">357813*****</td>
                        </tr>
                        <tr>
                            <td class="pro__title">Alamat</td>
                            <td class="pro__price">Perum D'Gardenia City Blok N-30, RT 24 RW 4, Cemengbakalan, Sidoarjo</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="billing_details">
                            <form action="" class="billing_details_form ">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Jumlah Pendapatan <span class="text-danger">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus"
                                                data-bs-content="Dihitung melalui penghasilan kepala keluarga.">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl-6">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Jumlah Tanggungan Anggota Keluarga <span class="text-danger">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus"
                                                data-bs-content="Tanggungan anggota keluarga mencakup anak-anak, lansia, atau anggota keluarga yang tidak bekerja dan bergantung hanya kepada kepala keluarga.">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Luas Bangunan <span class="text-danger">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl-6">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Jumlah Kepemilikan Asset (dalam rupiah) <span class="text-danger">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus"
                                                data-bs-content="Jumlah asset dinilai melalui total harga jual masing-masing asset seperti; tanah, kendaraan, alat usaha, peralatan elektronik, atau perhiasan.">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <input type="number" name="company_name" value="" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Legalitas Bangunan <span class="text-danger">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="Pilih Jenis Hak Milik">Pilih Jenis Hak Milik
                                                    </option>
                                                    <option value="1">Hilang/ tidak bisa menunjukan</option>
                                                    <option value="2">SHPL</option>
                                                    <option value="3">Sewa/ milik pihak lain</option>
                                                    <option value="4">Letter c</option>
                                                    <option value="5">Petok D</option>
                                                    <option value="6">SHGB</option>
                                                    <option value="7">SHM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xl-4">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Kondisi Atap Bangunan <span class="text-danger">*</span>
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
                                                <select class="wide nice-select">
                                                    <option data-display="Pilih Kondisi Atap">Pilih Kondisi Atap</option>
                                                    <option value="1">Rusak ringan</option>
                                                    <option value="2">Rusak sedang</option>
                                                    <option value="3">Rusak berat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Kondisi Dinding Bangunan <span class="text-danger">*</span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="Pilih Kondisi Dinding">Pilih Kondisi Dinding
                                                    </option>
                                                    <option value="1">Dinding tidak diplester</option>
                                                    <option value="2">Dinding kurang tinggi</option>
                                                    <option value="3">Bata kualitas rendah / dinding lembab</option>
                                                    <option value="4">Tidak ada tembok / tumpang tetangga</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="company_name" class="mb-2 fw-bold">
                                            Kondisi Lantai Bangunan <span class="text-danger">*</span>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-html="true"
                                                data-bs-content="
                                                Lantai rendah adalah kondisi dimana lantai terlihat tidak rata/ bergelombang, berpotensi terendam banjir, dan berada dibawah ketinggian jalan.
                                            ">
                                                <i class="fas fa-info-circle ms-2 text-primary"></i>
                                            </span>
                                        </label>
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide nice-select">
                                                    <option data-display="Pilih Kondisi Lantai">Pilih Kondisi Lantai
                                                    </option>
                                                    <option value="1">Lantai keramik sebagaian</option>
                                                    <option value="2">Lantai non keramik</option>
                                                    <option value="3">Lantai rendah keramik</option>
                                                    <option value="4">Lantai rendah non keramik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h2 class="mb-5">Unggah Dokumen Terkait</h2>
                                <div class="row mt-3">
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <label for="company_name" class="mb-2 fw-bold">
                                                Unggah Serfikat Hak Milik <span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" id="inputGroupFile01">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-xl-12">
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper1" id="skipper" checked="">
                                            <label for="skipper"><span></span>Saya menyatakan bahwa seluruh data dan
                                                informasi yang saya isikan adalah benar, jujur, dan sesuai dengan keadaan
                                                yang sebenarnya. Apabila di kemudian hari ditemukan ketidaksesuaian atau
                                                ketidakbenaran data, saya bersedia menanggung segala akibat dan sanksi yang
                                                ditetapkan oleh pihak yang berwenang.</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right d-flex justify-content-start mt-5">
                <a href="{{ route('pengajuan') }}" class="thm-btn-danger">Batalkan</a>
                <a href="checkout.html" class="thm-btn-success ms-3">Ajukan Formulir</a>
            </div>
        </div>
    </section>
@endsection
