@extends('layouts.master')

@section('content')
    <!--Main Slider Start-->
    <section class="main-slider clearfix mb-5">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                        <span>life.</span>
                                    </h2>
                                    <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                        sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn">Let’s Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                        <span>life.</span>
                                    </h2>
                                    <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                        sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn">Let’s Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);">
                    </div>
                    <!-- /.image-layer -->

                    <div class="main-slider-shape-1 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                        <span>life.</span>
                                    </h2>
                                    <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                        sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn">Let’s Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow1"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
            style="background-image: url(assets/images/backgrounds/about-one-bg.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                            </div>
                            <div class="about-one__img-two">
                                <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                            </div>
                            <div class="about-one__experience">
                                <h2 class="about-one__experience-year">30</h2>
                                <p class="about-one__experience-text">Years of <br> Experience</p>
                            </div>
                            <div class="about-one__shape-1">
                                <img src="assets/images/shapes/about-one-shape-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About company</p>
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title">We provide the best insurance policy</h2>
                        </div>
                        <p class="about-one__text-1">Duis aute irure dolor in reprehenderit in velit esse cillum
                            dolore eu nulla pariatur.</p>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Refresing to get such a personal touch.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </li>
                        </ul>
                        <p class="about-one__text-2">Nullam eu nibh vitae est tempor molestie id sed ex. Quisque
                            dignissim maximus ipsum, sed rutrum metus tincidunt et. Sed eget tincidunt ipsum.</p>
                        <div class="about-one__btn-call">
                            <div class="about-one__btn-box">
                                <a href="about.html" class="thm-btn about-one__btn">Discover More</a>
                            </div>
                            <div class="about-one__call">
                                <div class="about-one__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="about-one__call-content">
                                    <a href="tel:9200368090">+92 (003) 68-090</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Counter One Start-->
    <Section class="counter-one">
        <div class="counter-one-shape-1 float-bob-y">
            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
        </div>
        <div class="counter-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-insurance-1"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="2.6">00</h3>
                                    <span class="counter-one__plus">k</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Gave insurances</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="89">00</h3>
                                    <span class="counter-one__plus">+</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Professional team</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-life-insurance"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="2.8">00</h3>
                                    <span class="counter-one__plus">k</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Satisfied customers</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="counter-one__count-box">
                                <div class="counter-one__count-box-inner">
                                    <h3 class="odometer" data-count="99">00</h3>
                                    <span class="counter-one__plus">%</span>
                                </div>
                            </div>
                        </div>
                        <p class="counter-one__text">Our success rate</p>
                    </div>
                </div>
                <!--Counter One Single End-->
            </div>
        </div>
    </Section>
    <!--Counter One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">recent news feed</p>
                    <div class="section-title-shape-1">
                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                    </div>
                    <div class="section-title-shape-2">
                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Latest news & articles <br> from the blog</h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-1.jpg" alt="">
                            <div class="news-one__tag">
                                <p><i class="far fa-folder"></i>BUSINESS</p>
                            </div>
                            <div class="news-one__arrow-box">
                                <a href="news-details.html" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2023
                                    </a>
                                </li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Which allows you to pay down
                                    insurance bills</a></h3>
                            <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                mattis.</p>
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-2.jpg" alt="">
                            <div class="news-one__tag">
                                <p><i class="far fa-folder"></i>BUSINESS</p>
                            </div>
                            <div class="news-one__arrow-box">
                                <a href="news-details.html" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2023
                                    </a>
                                </li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Leverage agile frameworks to
                                    provide</a></h3>
                            <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                mattis.</p>
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-3.jpg" alt="">
                            <div class="news-one__tag">
                                <p><i class="far fa-folder"></i>BUSINESS</p>
                            </div>
                            <div class="news-one__arrow-box">
                                <a href="news-details.html" class="news-one__arrow">
                                    <span class="icon-right-arrow1"></span>
                                </a>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-calendar"></i> 15 March, 2023
                                    </a>
                                </li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title"><a href="news-details.html">Bring to the table win-win
                                    survival strategis</a></h3>
                            <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                mattis.</p>
                            <div class="news-one__read-more">
                                <a href="news-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->
@endsection
