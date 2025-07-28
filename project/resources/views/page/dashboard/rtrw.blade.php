@extends('layouts.admin')

@section('content')
    <div class="row gy-2">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-6">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        class="mb-0 w-48-px h-48-px bg-cyan-100 text-cyan-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <i class="ri-group-fill"></i>
                                    </span>
                                    <div>
                                        <h6 class="fw-semibold mb-2">650</h6>
                                        <span class="fw-medium text-secondary-light text-sm">Total Warga
                                            Mengajukan</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm mb-0"> <span class="text-cyan-600">4</span> Warga mengajukan minggu
                                ini
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-sm-6">
                    <div class="card p-3 shadow-2 radius-8 h-100 bg-gradient-end-4">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">

                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        class="mb-0 w-48-px h-48-px bg-lilac-100 text-lilac-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <i class="ri-award-fill"></i>
                                    </span>
                                    <div>
                                        <h6 class="fw-semibold mb-2">570</h6>
                                        <span class="fw-medium text-secondary-light text-sm">Total Bantuan
                                            Diterima</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm mb-0"> <span class="text-lilac-600">8</span> Bantuan diterima bulan
                                ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24 mt-5">
        <h6 class="fw-semibold mb-0">Informasi Terbaru</h6>
    </div>

    <div class="row gy-2">
        <div class="col-xxxl-12">
            <div class="row gy-4">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog1.png" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Discover
                                        Endless Possibilities in Real Estate Live Your Best Life in a</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog2.png" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Hiring</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Turn Your
                                        Real Estate Dreams Into Reality Embrace the Real Estate</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog3.png" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        satisfaction is our top the best priority</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a href="blog-details.html" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="assets/images/blog/blog4.png" alt=""
                                    class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a href="blog-details"
                                        class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Jan 17, 2024
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a href="blog-details.html"
                                        class="text-line-2 text-hover-primary-600 text-xl transition-2">Your
                                        journey to home ownership starts here</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat
                                    adipisci quidem eveniet enim minus.</p>
                                <a href="blog-details.html"
                                    class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
