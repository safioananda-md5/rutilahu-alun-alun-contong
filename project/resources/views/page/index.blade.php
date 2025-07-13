@extends('layout.layout')

@php
    $headTitle = 'Home One';
    $css = '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '"/>';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script> 
               <script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
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
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-1.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h2>
                                        <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                            sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-2.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h2>
                                        <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                            sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-3.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Insurance <br> for the better <br> family
                                            <span>life.</span></h2>
                                        <p class="main-slider__text">Phasellus condimentum laoreet turpis, ut tincid
                                            sodales <br> in. Integer leo arcu, mollis sit amet tempor.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="" class="thm-btn main-slider__btn">Let’s Get Started</a>
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

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="">Safe your money</a></h3>
                                    <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                        eiusmod tempor incid idunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="">Get free quote</a></h3>
                                    <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                        eiusmod tempor incid idunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="">Fast & reliable</a></h3>
                                    <p class="feature-one__text">Lorem ipsum dolor amet consectetur adipiscing elit do
                                        eiusmod tempor incid idunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url('{{ asset('assets/images/backgrounds/about-one-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">30</h2>
                                    <p class="about-one__experience-text">Years of <br> Experience</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-1.jpg') }}" alt="">
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
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
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
                                    <a href="" class="thm-btn about-one__btn">Discover More</a>
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

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We’re covering all the insurance fields</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">Nullam eu nibh vitae est tempor molestie id sed ex.
                                    Quisque dignissim maximus ipsum, sed rutrum metus tincidunt et. Sed eget tincidunt
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-drive"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Car insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-2.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Life insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-3.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-home"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Home insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-4.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-heart-beat"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Health insurance</a>
                                    </h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-5.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Business
                                            insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-6.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-fire"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Fire insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-7.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Marriage
                                            insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-8.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-plane"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="">Travel insurance</a>
                                    </h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/why-choose-one-shape-1.png') }}')"></div>
            <div class="why-choose-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-2.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-3 float-bob-x">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-4 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-4.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-5 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-5.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-6 float-bob-x">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-6.png') }}" alt="">
            </div>
            <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('assets/images/resources/why-choose-one-img.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-3.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-4.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Few reasons for people choosing insur</h2>
                            </div>
                            <p class="why-choose-one__text">Nullam eu nibh vitae est tempor molestie id sed ex. Quisque
                                dignissim maximus ipsum, sed rutrum metus tincidunt et.</p>
                            <div class="why-choose-one__list-box">
                                <ul class="list-unstyled why-choose-one__list">
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Control over policy</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Save your money</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/get-insurance-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{ asset('assets/images/resources/get-insurance-img-1.png') }}" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <p>Aleesha Rose</p>
                            </div>
                            <div class="get-insurance__circle"></div>
                            <div class="get-insurance__shape-1 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/get-insurance-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Free quote</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get an insurance quote <br> to get started!</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#home2" class="tab-btn active-btn"><span>Home</span></li>
                                        <li data-tab="#vehicles" class="tab-btn"><span>Vehicles</span></li>
                                        <li data-tab="#health" class="tab-btn"><span>health</span></li>
                                        <li data-tab="#life" class="tab-btn"><span>Life</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="home2">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="vehicles">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="health">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Car insurance</option>
                                                                <option value="2">Life insurance</option>
                                                                <option value="3">Home insurance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="life">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select service</option>
                                                                <option value="1">service One</option>
                                                                <option value="2">service Two</option>
                                                                <option value="3">service Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Insurance End-->

        <!--Counter One Start-->
        <Section class="counter-one">
            <div class="counter-one-shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-one-shape-1.png') }}" alt="">
            </div>
            <div class="counter-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-one-shape-2.png') }}" alt="">
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

        <!--Team One Start-->
        <section class="team-one">
            <div class="team-one__shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our experts</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Meet our experienced <br> team people</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="">Thomas Jakson</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="">Hallen Smith</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager</p>
                                <h3 class="team-one__name"><a href="">David Cooper</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__bottom">
                            <p class="team-one__bottom-text">Contact Our Expert Team Memeber To Take Our <span>Best
                                    Policies</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">
            </div>
            <div class="testimonial-one-shape-3 float-bob-y">
                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">What our customers are <br> talking about</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-right">
                                <p class="testimonial-one__top-text">Pellentesque habitant morbi tristique senectus
                                    netus et malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet
                                    blandit enim feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Smith Vectoria</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Christine Eve</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Hallen Smith</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-4.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Kevin Martin</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">recent news feed</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest news & articles <br> from the blog</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href=""><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="">Which allows you to pay down
                                        insurance bills</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href=""><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="">Leverage agile frameworks to
                                        provide</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href=""><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href=""><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="">Bring to the table win-win
                                        survival strategis</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Tracking Start-->
        <section class="tracking">
            <div class="container">
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="tracking__icon">
                            <span class="icon-folder"></span>
                        </div>
                        <div class="tracking__content">
                            <p class="tracking__sub-title">Quisque vel ortor</p>
                            <h3 class="tracking__title">Start tracking your claims</h3>
                        </div>
                    </div>
                    <div class="tracking__btn-box">
                        <a href="" class="thm-btn tracking__btn">Track Your Claim</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Tracking End-->
        
@endsection