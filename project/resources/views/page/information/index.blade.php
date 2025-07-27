@extends('layouts.master')

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
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
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-1.jpg" alt="">
                            <div class="news-one__arrow-box">
                                <a href="{{ route('information_detail') }}" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="#" class="disabled-link"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                </li>
                                <li><a href="#" class="disabled-link"><i class="far fa-user"></i> Admin </a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="{{ route('information_detail') }}">Which allows you to pay down
                                    insurance bills</a></h3>
                            <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                mattis.</p>
                            <div class="news-one__read-more">
                                <a href="{{ route('information_detail') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
