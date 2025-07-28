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

    <div class="card basic-data-table mt-5">
        <div class="card-header">
            <h5 class="card-title mb-0">Data Pengajuan</h5>
        </div>
        <div class="card-body">
            <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    S.L
                                </label>
                            </div>
                        </th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Name</th>
                        <th scope="col">Issued Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    01
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list1.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    02
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list2.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    03
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list3.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    04
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list4.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    05
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list5.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
                            </div>
                        </td>
                        <td>15 March 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    06
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list6.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
                            </div>
                        </td>
                        <td>15 March 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    07
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list7.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Robiul Hasan</h6>
                            </div>
                        </td>
                        <td>27 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    08
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list8.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
                            </div>
                        </td>
                        <td>27 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    09
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list9.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
                            </div>
                        </td>
                        <td>30 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    10
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list10.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
                            </div>
                        </td>
                        <td>30 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    01
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list1.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    02
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list2.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    03
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list3.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                        <td>$200.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    04
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list4.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    05
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list5.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
                            </div>
                        </td>
                        <td>15 March 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    06
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list6.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
                            </div>
                        </td>
                        <td>15 March 2024</td>
                        <td>$150.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    07
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list7.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Robiul Hasan</h6>
                            </div>
                        </td>
                        <td>27 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    08
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list8.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
                            </div>
                        </td>
                        <td>27 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    09
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list9.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
                            </div>
                        </td>
                        <td>30 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    10
                                </label>
                            </div>
                        </td>
                        <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="assets/images/user-list/user-list10.png" alt=""
                                    class="flex-shrink-0 me-12 radius-8">
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
                            </div>
                        </td>
                        <td>30 April 2024</td>
                        <td>$250.00</td>
                        <td> <span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a>
                            <a href="javascript:void(0)"
                                class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
