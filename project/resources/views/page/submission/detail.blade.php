@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2">
                <a href="javascript:void(0)"
                    class="btn btn-sm btn-primary-600 radius-8 d-inline-flex align-items-center gap-1">
                    <iconify-icon icon="pepicons-pencil:paper-plane" class="text-xl"></iconify-icon>
                    Send Invoice
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-warning radius-8 d-inline-flex align-items-center gap-1">
                    <iconify-icon icon="solar:download-linear" class="text-xl"></iconify-icon>
                    Download
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-success radius-8 d-inline-flex align-items-center gap-1">
                    <iconify-icon icon="uil:edit" class="text-xl"></iconify-icon>
                    Edit
                </a>
                <button type="button" class="btn btn-sm btn-danger radius-8 d-inline-flex align-items-center gap-1"
                    onclick="printInvoice()">
                    <iconify-icon icon="basil:printer-outline" class="text-xl"></iconify-icon>
                    Print
                </button>
            </div>
        </div>
        <div class="card-body py-40">
            <div class="row justify-content-center" id="invoice">
                <div class="col-lg-12">
                    <div>
                        <div class="p-20 d-flex flex-wrap justify-content-between gap-3 border-bottom">
                            <div>
                                <h3 class="text-xl">Invoice #3492</h3>
                                <p class="mb-1 text-sm">Date Issued: 25/08/2020</p>
                                <p class="mb-0 text-sm">Date Due: 29/08/2020</p>
                            </div>
                            <div>
                                <img src="assets/images/logo.png" alt="image" class="mb-8">
                                <p class="mb-1 text-sm">4517 Washington Ave. Manchester, Kentucky 39495</p>
                                <p class="mb-0 text-sm">random@gmail.com, +1 543 2198</p>
                            </div>
                        </div>
                        <div class="py-28 px-20">
                            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">
                                <div>
                                    <h6 class="text-md">Issus For:</h6>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Name</td>
                                                <td class="ps-8">:Will Marthas</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td class="ps-8">:4517 Washington Ave.USA</td>
                                            </tr>
                                            <tr>
                                                <td>Phone number</td>
                                                <td class="ps-8">:+1 543 2198</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <table class="text-sm text-secondary-light">
                                        <tbody>
                                            <tr>
                                                <td>Issus Date</td>
                                                <td class="ps-8">:25 Jan 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Order ID</td>
                                                <td class="ps-8">:#653214</td>
                                            </tr>
                                            <tr>
                                                <td>Shipment ID</td>
                                                <td class="ps-8">:#965215</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="mt-24">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table text-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-sm">SL.</th>
                                                <th scope="col" class="text-sm">Items</th>
                                                <th scope="col" class="text-sm">Qty</th>
                                                <th scope="col" class="text-sm">Units</th>
                                                <th scope="col" class="text-sm">Unit Price</th>
                                                <th scope="col" class="text-end text-sm">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td class="text-end">$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td class="text-end">$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td class="text-end">$1000.00</td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Apple's Shoes</td>
                                                <td>5</td>
                                                <td>PC</td>
                                                <td>$200</td>
                                                <td class="text-end">$1000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row gy-4 mb-3 border-top mt-3">
                                    <h6 class="text-md">Foto Bukti Survey</h6>
                                    <div class="col-xxl-3 col-md-4 col-sm-6">
                                        <a href="assets/images/gallery/gallery-img1.png"
                                            class="popup-img w-100 h-100 d-flex overflow-hidden" target="_blank">
                                            <img src="assets/images/gallery/gallery-img1.png" alt=""
                                                class="hover-scale-img__img w-100 h-100 object-fit-cover">
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between gap-3">
                                    <div>
                                        <p class="text-sm mb-0"><span class="text-primary-light fw-semibold">Sales
                                                By:</span> Jammal</p>
                                        <p class="text-sm mb-0">Thanks for your business</p>
                                    </div>
                                    <div>
                                        <table class="text-sm">
                                            <tbody>
                                                <tr>
                                                    <td class="pe-64">Subtotal:</td>
                                                    <td class="pe-16">
                                                        <span class="text-primary-light fw-semibold">$4000.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-64">Discount:</td>
                                                    <td class="pe-16">
                                                        <span class="text-primary-light fw-semibold">$0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-64 border-bottom pb-4">Tax:</td>
                                                    <td class="pe-16 border-bottom pb-4">
                                                        <span class="text-primary-light fw-semibold">0.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-64 pt-4">
                                                        <span class="text-primary-light fw-semibold">Total:</span>
                                                    </td>
                                                    <td class="pe-16 pt-4">
                                                        <span class="text-primary-light fw-semibold">$1690</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-64">
                                <p class="text-center text-secondary-light text-sm fw-semibold">Thank you for your
                                    purchase!
                                </p>
                            </div>

                            <div class="d-flex flex-wrap justify-content-between align-items-end mt-64">
                                <div class="text-sm border-top d-inline-block px-12">Signature of Customer</div>
                                <div class="text-sm border-top d-inline-block px-12">Signature of Authorized</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card h-100 p-0 mt-3">
        <div class="card-header border-bottom bg-base py-16 px-24">
            <h6 class="text-lg fw-semibold mb-0">Unggah foto survey</h6>
        </div>
        <div class="card-body p-24">
            <label for="file-upload-name"
                class="mb-16 border border-neutral-600 fw-medium text-secondary-light px-16 py-12 radius-12 d-inline-flex align-items-center gap-2 bg-hover-neutral-200">
                <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                Click untuk unggah
                <input type="file" class="form-control w-auto mt-24 form-control-lg" id="file-upload-name" multiple
                    hidden>
            </label>
            <ul id="uploaded-img-names" class=""></ul>
        </div>
    </div>
@endsection
