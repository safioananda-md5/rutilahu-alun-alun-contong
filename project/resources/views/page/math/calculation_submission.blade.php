@extends('layouts.admin')
@section('title', 'Daftar Batch Penerimaan')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <div>
            <h6 class="fw-semibold mb-0">Rekomendasi Penerima Bantuan Rutilahu</h6>
            <small class="fst-italic">Hasil perhitungan berdasarkan penggunaan Metode ELECTRE dalam Sistem Pendukung
                Keputusan</small>
        </div>
    </div>
    <div class="alert alert-danger bg-danger-100 text-danger-600 border-danger-100 px-24 py-11 mb-0 text-md radius-8 d-flex align-items-center justify-content-between"
        role="alert">
        <div class="d-flex align-items-center gap-3">
            <iconify-icon icon="mdi:alert-circle-outline" class="icon text-xl"><template shadowrootmode="open">
                    <style data-style="data-style">
                        :host {
                            display: inline-block;
                            vertical-align: 0
                        }

                        span,
                        svg {
                            display: block
                        }
                    </style><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M11 15h2v2h-2zm0-8h2v6h-2zm1-5C6.47 2 2 6.5 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m0 18a8 8 0 0 1-8-8a8 8 0 0 1 8-8a8 8 0 0 1 8 8a8 8 0 0 1-8 8">
                        </path>
                    </svg>
                </template>
            </iconify-icon>
            <div>
                Perhatian: Halaman ini menyajikan hasil perhitungan akhir. Demi menjaga <span class="fw-semibold">integritas
                    dan kerahasiaan data</span>, hasil
                ini <span class="fw-semibold">tidak akan disimpan</span> dan <span class="fw-semibold">tidak dapat diakses
                    kembali</span> setelah Anda menutup
                sesi peramban ini. Harap segera mencatat atau mencetak hasilnya.
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('script')
    <!-- Data Table js -->
    <script src="{{ asset('assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>

    <script></script>
@endsection
