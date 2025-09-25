@extends('layouts.master')

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/kelurahan/Cover_Informasi.jpg)">
        </div>
        <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>informasi</li>
                </ul>
                <h2>Informasi Terbaru</h2>
            </div>
        </div>
    </section>
    <section class="news-one mt-5">
        <div class="container">
            <div class="row">
                @forelse ($informasi as $info)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="data:image/jpeg;base64,{{ $info->imagesmall }}" alt="">
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('information_detail', $info->slug) }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="#" class="disabled-link"><i class="far fa-calendar"></i>
                                            {{ \Carbon\Carbon::parse($info->created_at)->translatedFormat('d F, Y') }}</a>
                                    </li>
                                    <li><a href="#" class="disabled-link"><i class="far fa-user"></i> Admin </a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a
                                        href="{{ route('information_detail', $info->slug) }}">{{ $info->title }}</a>
                                </h3>
                                <p class="news-one__text">
                                    {{ \Illuminate\Support\Str::words(
                                        preg_replace('/\s+/', ' ', html_entity_decode(preg_replace('/<[^>]+>/', ' ', $info->body))),
                                        20,
                                        '...',
                                    ) }}
                                </p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('information_detail', $info->slug) }}">Detail Informasi
                                        <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        Tidak ada informasi terbaru.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
