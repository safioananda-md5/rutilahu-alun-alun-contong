@extends('layouts.admin')
@section('title', 'Daftar Informasi Rutilahu')

@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Daftar Informasi</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Daftar Informasi</li>
        </ul>
    </div>
    <div class="row gy-2 mt-3">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                @forelse ($informasi as $info)
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="card h-100 p-0 radius-12 overflow-hidden">
                            <div class="card-body p-24">
                                <a href="{{ route('admin.information.edit_information', Crypt::encrypt($info->id)) }}"
                                    class="w-100 max-h-194-px radius-8 overflow-hidden">
                                    <img src="data:image/jpeg;base64,{{ $info->imagesmall }}" alt=""
                                        class="w-100 h-100 object-fit-cover">
                                </a>
                                <div class="mt-20">
                                    <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                        <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                            <i class="ri-calendar-2-line"></i>
                                            {{ \Carbon\Carbon::parse($info->created_at)->translatedFormat('d F Y') }}
                                        </div>
                                    </div>
                                    <h6 class="mb-16">
                                        <a href="{{ route('admin.information.edit_information', Crypt::encrypt($info->id)) }}"
                                            class="text-line-2 text-hover-primary-600 text-xl transition-2">{{ $info->title }}</a>
                                    </h6>
                                    <p class="text-line-3 text-neutral-500">
                                        {{ \Illuminate\Support\Str::words(
                                            preg_replace('/\s+/', ' ', html_entity_decode(preg_replace('/<[^>]+>/', ' ', $info->body))),
                                            20,
                                            '...',
                                        ) }}
                                    </p>
                                    <div class="text-neutral-900 text-hover-primary-600 transition-2">
                                        <a href="{{ route('admin.information.edit_information', Crypt::encrypt($info->id)) }}"
                                            class="d-flex align-items-center gap-8 fw-semibold">
                                            Edit Informasi
                                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        Tidak ada informasi.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('script')
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
@endsection
