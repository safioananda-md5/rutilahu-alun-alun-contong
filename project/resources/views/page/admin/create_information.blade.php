@extends('layouts.admin')
@if (isset($edit) && $edit)
    @section('title', 'Edit Informasi Rutilahu')
@else
    @section('title', 'Tambah Informasi Rutilahu')
@endif


@section('content')
    @if (isset($edit) && $edit)
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Edit Informasi</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="{{ route('admin.dashboard_admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li class="fw-medium">
                    <a href="{{ route('admin.information.list_information') }}"
                        class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Daftar Informasi
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Edit Informasi</li>
            </ul>
        </div>
    @else
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Tambah Informasi</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li class="fw-medium">
                    <a href="{{ route('admin.information.list_information') }}"
                        class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Daftar Informasi
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Tambah Informasi</li>
            </ul>
        </div>
    @endif
    <div class="card basic-data-table mt-5">
        <div class="card-header d-flex justify-content-between">
            <div>
                @if (isset($edit) && $edit)
                    <h5 class="card-title mb-0">Formulir Edit Informasi Rutilahu</h5>
                @else
                    <h5 class="card-title mb-0">Formulir Tambah Informasi Rutilahu</h5>
                @endif
                <small><span style="color: red">*</span> <i style="font-style: italic">Menandakan bahwa kolom ini wajib
                        diisi
                        atau dipilih.</i></small>
            </div>
            @if (isset($edit) && $edit)
                <div>
                    <button class="btn btn-sm btn-danger" id="HapusInformasi">Hapus Informasi</button>
                </div>
            @endif
        </div>
        @if (isset($edit) && $edit)
            <form action="{{ route('admin.information.update_information', Crypt::encrypt($informasi->id)) }}"
                method="POST" enctype="multipart/form-data" id="UpdateinformationForm">
                @method('PUT')
            @else
                <form action="{{ route('admin.information.store_information') }}" method="POST"
                    enctype="multipart/form-data" id="informationForm">
        @endif
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    @if (isset($edit) && $edit)
                        <label class="form-label">Judul Informasi<span style="color: red">*</span></label>
                        <input type="text" name="judulInformasi" class="form-control judulInformasi"
                            placeholder="Informasi Rutilahu ...." data-label="Judul Informasi"
                            value="{{ $informasi->title }}">
                    @else
                        <label class="form-label">Masukkan Judul Informasi<span style="color: red">*</span></label>
                        <input type="text" name="judulInformasi" class="form-control judulInformasi"
                            placeholder="Informasi Rutilahu ...." data-label="Judul Informasi">
                    @endif
                    <span class="error-text text-danger"></span>
                    @error('judulInformasi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-12">
                    <label class="form-label">Isi Informasi<span style="color: red">*</span></label>
                    @if (isset($edit) && $edit)
                        <textarea id="isiInformasi" name="isiInformasi" class="form-control informasieditor"
                            placeholder="Berikut adalah isi informasi untuk Informasi Rutilahu..." data-label="Isi Informasi">{!! $informasi->body !!}</textarea>
                    @else
                        <textarea id="isiInformasi" name="isiInformasi" class="form-control informasieditor"
                            placeholder="Berikut adalah isi informasi untuk Informasi Rutilahu..." data-label="Isi Informasi"></textarea>
                    @endif
                    <span class="error-text text-danger"></span>
                    @error('isiInformasi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6">
                    @if (isset($informasi) && $informasi->imagesmall)
                        <label for="coverKecil" class="form-label">Update Depan Kecil (370x270)</label>
                    @else
                        <label for="coverKecil" class="form-label">Upload Foto Depan Kecil (370x270)<span
                                style="color: red">*</span></label>
                    @endif
                    <input type="file" id="coverKecil" name="coverKecil" class="form-control coverKecil"
                        accept=".jpg, .jpeg, .png" data-label="Foto Depan Kecil">
                    <span class="error-text text-danger"></span>
                    @error('coverKecil')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if (isset($informasi) && $informasi->imagesmall)
                        <p class="mb-0 pb-0">#Foto saat ini</p>
                        <div class="d-flex align-items-center mb-3">
                            <div id="cover-preview" class="img-box">
                                <img src="data:image/jpeg;base64,{{ $informasi->imagesmall }}" alt="Foto Dalam Besar">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    @if (isset($informasi) && $informasi->imagebig)
                        <label for="coverBesar" class="form-label">Update Foto Dalam Besar (1540x820)</label>
                    @else
                        <label for="coverBesar" class="form-label">Upload Foto Dalam Besar (1540x820)<span
                                style="color: red">*</span></label>
                    @endif
                    <input type="file" id="coverBesar" name="coverBesar" class="form-control coverBesar"
                        accept=".jpg, .jpeg, .png" data-label="Foto Dalam Besar">
                    <span class="error-text text-danger"></span>
                    @error('coverBesar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if (isset($informasi) && $informasi->imagebig)
                        <p class="mb-0 pb-0">#Foto saat ini</p>
                        <div class="d-flex align-items-center mb-3">
                            <div id="cover-preview" class="img-box">
                                <img src="data:image/jpeg;base64,{{ $informasi->imagebig }}" alt="Foto Dalam Besar">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <label for="lampiran" class="form-label">Upload File Lampiran
                        <small>(Dapat lebih dari 1 file)</small></label>
                    <input type="file" id="lampiran" name="lampiran[]" class="form-control"
                        accept="application/pdf" multiple>
                </div>
                <div id="lampiran_prev" class="col-lg-12 d-flex flex-wrap gap-2 mb-3 mt-3"></div>
                @if (isset($edit) && $edit)
                    <div class="col-lg-12 note-editable">
                        <h6 class="m-0 px-0 pb-0 pt-3" style="border-top: 1px solid #ddd">#Lampiran Saat Ini</h6>
                        <div class="data-lampiran">
                            @forelse ($files as $f)
                                @if ($loop->first)
                                    <ul>
                                @endif
                                <li class="my-3">
                                    <a href="data:application/pdf;base64,{{ $f['file'] }}"
                                        download="{{ $f['name'] }}">
                                        <i class="fas fa-download text-primary"></i> {{ $f['name'] }}
                                    </a>
                                    <button type="button" data-enc="{{ Crypt::encrypt($informasi->id) }}"
                                        data-type="{{ Crypt::encrypt($f['name']) }}"
                                        class="mx-3 btn btn-sm btn-danger btn-delete-lampiran"
                                        data-label="{{ 'Lampiran ' . $f['name'] }}">
                                        <div class="d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="mdi:trash" class="text-light me-1"></iconify-icon>Hapus
                                        </div>
                                    </button>
                                </li>
                                @if ($loop->last)
                                    </ul>
                                @endif
                            @empty
                                Tidak ada lampiran.
                            @endforelse
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-footer py-3" style="text-align: right;">
            @if (isset($edit) && $edit)
                <button type="button" onclick="window.location.href='{{ route('admin.information.list_information') }}'"
                    class="btn btn-sm btn-outline-danger me-2">Kembali</button>
                <button type="submit" class="btn btn-sm btn-outline-success me-2 submit__form-btn">Update</button>
            @else
                <button type="button" onclick="window.location.href='{{ route('admin.information.list_information') }}'"
                    class="btn btn-sm btn-outline-danger me-2">Kembali</button>
                <button type="submit" class="btn btn-sm btn-outline-success me-2 submit__form-btn">Tambah</button>
            @endif
        </div>
        </form>
    </div>
@endsection

@section('css')
    <link href="{{ asset('assets/vendors/summernote/summernote-bs5.css') }}" rel="stylesheet">
    <style>
        .note-editable h1 {
            font-size: 2em;
            font-weight: bold;
            margin: 0.67em 0;
        }

        .note-editable h2 {
            font-size: 1.75em;
            font-weight: bold;
            margin: 0.75em 0;
        }

        .note-editable h3 {
            font-size: 1.5em;
            font-weight: bold;
            margin: 0.83em 0;
        }

        .note-editable h4 {
            font-size: 1.25em;
            font-weight: bold;
            margin: 1em 0;
        }

        .note-editable h5 {
            font-size: 1em;
            font-weight: bold;
            margin: 1.33em 0;
        }

        .note-editable h6 {
            font-size: 0.875em;
            font-weight: bold;
            margin: 1.67em 0;
        }

        .note-editable i {
            font-style: italic !important;
        }

        .note-editable b {
            font-weight: bold !important;
        }

        .note-editable u {
            text-decoration: underline !important;
        }

        .note-editable blockquote {
            border-left: 4px solid #007bff;
            padding-left: 15px;
            margin: 10px 0;
            color: #555;
            font-style: italic;
            background-color: #f9f9f9;
        }

        .note-editable s,
        .note-editable strike {
            text-decoration: line-through;
        }

        .note-editable ul {
            list-style-type: disc;
            margin: 10px 0;
            padding-left: 20px;
            color: #333;
        }

        .note-editable li {
            margin-bottom: 5px;
            line-height: 1.5;
        }

        .note-editable ol {
            list-style-type: decimal;
            margin: 10px 0;
            padding-left: 20px;
            color: #333;
        }

        .note-editable pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: monospace;
            font-size: 14px;
            color: #333;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow-x: auto;
        }

        .note-editable span {
            font-size: 14px;
            color: #333;
            font-weight: normal;
            display: inline-block;
            line-height: 1.5;
        }

        .img-box {
            width: 400px;
            height: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .sf-title {
            font-size: 1.75em !important;
            font-weight: bold !important;
            margin: 0 !important;
        }

        a:hover {
            color: #007bff;
        }
    </style>
@endsection

@section('script')
    <script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/summernote/summernote-bs5.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher/dist/flasher.min.js"></script>
    <script>
        $('#isiInformasi').summernote({
            tooltip: false,
            height: 300,
            placeholder: 'Berikut merupakan deskripsi dari Informasi Rutilahu...',
            toolbar: [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['help']]
            ]
        });

        let valid = false;

        $(document).on('submit', '#informationForm', function(e) {
            e.preventDefault();

            $('#informationForm .judulInformasi, .informasieditor, .coverKecil, .coverBesar').each(function() {
                let input = $(this);
                let label = input.data('label');
                let errorEl = input.closest('.col-lg-12').find('.error-text');
                let errorEl1 = input.closest('.col-lg-6').find('.error-text');
                let checkbox = $('#validasi');

                if ($.trim(input.val()) === '') {
                    errorEl.text('Data ' + label + ' wajib diisi.');
                    errorEl1.text('Data ' + label + ' wajib diisi.');
                    valid = false;
                } else {
                    errorEl.text('');
                    valid = true;
                }
            });

            if (valid) {
                let formData = new FormData(this);

                $('.submit__form-btn')
                    .prop('disabled', true)
                    .text('Loading...')
                    .removeClass('btn-outline-success')
                    .addClass('btn-success')
                    .css({
                        'cursor': 'auto',
                        'opacity': '1'
                    });

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        window.location.href = response.redirect;
                    },
                    error: function(xhr) {
                        $('.submit__form-btn')
                            .prop('disabled', false)
                            .text('Tambah')
                            .removeClass('btn-success')
                            .addClass('btn-outline-success')

                        let errors = xhr.responseJSON?.errors || {};

                        for (let field in errors) {
                            let input = $(`[name="${field}"]`);
                            let errorEl = input.closest('.col-lg-12').find('.error-text');
                            errorEl.text(errors[field][0]);
                        }

                        let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                        flasher.error(msg);
                    }
                });
            } else {
                flasher.error('Terdapat data isian kosong.');
            }
        });

        $(document).on('submit', '#UpdateinformationForm', function(e) {
            e.preventDefault();

            $('#informationForm .judulInformasi, .informasieditor').each(function() {
                let input = $(this);
                let label = input.data('label');
                let errorEl = input.closest('.col-lg-12').find('.error-text');
                let checkbox = $('#validasi');

                if ($.trim(input.val()) === '') {
                    errorEl.text('Data ' + label + ' wajib diisi.');
                    valid = false;
                } else {
                    errorEl.text('');
                    valid = true;
                }
            });

            if (valid) {
                let formData = new FormData(this);

                $('.submit__form-btn')
                    .prop('disabled', true)
                    .text('Loading...')
                    .removeClass('btn-outline-success')
                    .addClass('btn-success')
                    .css({
                        'cursor': 'auto',
                        'opacity': '1'
                    });

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        window.location.href = response.redirect;
                    },
                    error: function(xhr) {
                        $('.submit__form-btn')
                            .prop('disabled', false)
                            .text('Tambah')
                            .removeClass('btn-success')
                            .addClass('btn-outline-success')

                        let errors = xhr.responseJSON?.errors || {};

                        for (let field in errors) {
                            let input = $(`[name="${field}"]`);
                            let errorEl = input.closest('.col-lg-12').find('.error-text');
                            errorEl.text(errors[field][0]);
                        }

                        let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                        flasher.error(msg);
                    }
                });
            } else {
                flasher.error('Terdapat data isian kosong.');
            }
        });

        $(document).on("click", ".btn-delete-lampiran", function(e) {
            let label = $(this).data('label');
            let divLampiran = $(this).closest('.data-lampiran');
            e.preventDefault();
            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: label + " akan dihapus.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                cancelButtonText: "Batal",
                customClass: {
                    title: 'sf-title',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    let enc = $(this).data('enc');
                    let type = $(this).data('type');
                    let formData = new FormData();
                    formData.append('enc', enc);
                    formData.append('type', type);

                    $.ajax({
                        url: "{{ route('admin.information.destroy_information') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            divLampiran.empty();
                            flasher.success('Data lampiran informasi berhasil diperbarui');
                            let dataLampiran = '';

                            if (res.data.length > 0) {
                                dataLampiran += '<ul>';

                                res.data.forEach(function(f) {
                                    dataLampiran += `
                                        <li class="my-3">
                                            <a href="data:application/pdf;base64,${f.file}"
                                                download="${f.name}">
                                                <i class="fas fa-download text-primary"></i> ${f.name}
                                            </a>
                                            <button type="button" class="mx-3 btn btn-sm btn-danger btn-delete-lampiran"
                                                data-enc="${f.enc}"
                                                data-type="${f.type}"
                                                data-label="Lampiran ${f.name}">
                                                <div class="d-inline-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="mdi:trash" class="text-light me-1"></iconify-icon>Hapus
                                                </div>
                                            </button>
                                        </li>
                                    `;
                                });

                                dataLampiran += '</ul>';
                            } else {
                                dataLampiran += 'Tidak ada lampiran.'
                            }

                            divLampiran.html(dataLampiran);
                        },
                        error: function(xhr) {
                            let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                            flasher.error(msg);
                        }
                    });
                }
            });
        });

        $(document).on("click", "#HapusInformasi", function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Keseluruhan informasi akan dihapus.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                cancelButtonText: "Batal",
                reverseButtons: true,
                customClass: {
                    title: 'sf-title',
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    let enc = @json($id);
                    let type = @json($udd);
                    let formData = new FormData();
                    formData.append('enc', enc);
                    formData.append('type', type);
                    formData.append('_method', 'DELETE');

                    $.ajax({
                        url: "{{ route('admin.information.destroy') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(res) {
                            window.location.href = res.redirect;
                        },
                        error: function(xhr) {
                            let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                            flasher.error(msg);
                        }
                    });
                }
            });
        });
    </script>

    <script type="module">
        import * as pdfjsLib from '/assets/vendors/pdfmaster/build/pdf.mjs';

        pdfjsLib.GlobalWorkerOptions.workerSrc = '/assets/vendors/pdfmaster/build/pdf.worker.mjs';

        const fileInput = document.getElementById('lampiran');
        const preview = document.getElementById('lampiran_prev');

        let filesArray = [];

        fileInput.addEventListener('change', function(e) {
            const newFiles = Array.from(e.target.files);

            filesArray = filesArray.concat(newFiles);

            renderPreviews();
        });

        function renderPreviews() {
            preview.innerHTML = '';

            filesArray.forEach((file, index) => {
                if (file.type !== 'application/pdf') return;

                const container = document.createElement('div');
                container.style.width = '120px';
                container.style.border = '1px solid #ddd';
                container.style.borderRadius = '5px';
                container.style.padding = '5px';
                container.style.textAlign = 'center';
                container.style.background = '#f8f9fa';
                container.style.position = 'relative';
                container.style.marginBottom = '10px';
                container.style.marginRight = '10px';

                const removeBtn = document.createElement('button');
                removeBtn.innerHTML = '&times;';
                removeBtn.style.position = 'absolute';
                removeBtn.style.top = '2px';
                removeBtn.style.right = '2px';
                removeBtn.style.border = 'none';
                removeBtn.style.background = 'transparent';
                removeBtn.style.cursor = 'pointer';
                removeBtn.style.fontSize = '16px';
                removeBtn.addEventListener('click', () => {
                    filesArray.splice(index, 1);
                    renderPreviews();
                });
                container.appendChild(removeBtn);

                const canvas = document.createElement('canvas');
                container.appendChild(canvas);

                const name = document.createElement('p');
                name.textContent = file.name;
                name.style.fontSize = '12px';
                name.style.margin = '5px 0 2px 0';
                container.appendChild(name);

                const size = document.createElement('p');
                size.textContent = (file.size / 1024).toFixed(1) + ' KB';
                size.style.fontSize = '12px';
                size.style.margin = '0';
                container.appendChild(size);

                preview.appendChild(container);

                const reader = new FileReader();
                reader.onload = function(event) {
                    const pdfData = new Uint8Array(event.target.result);
                    pdfjsLib.getDocument({
                        data: pdfData
                    }).promise.then(pdf => {
                        pdf.getPage(1).then(page => {
                            const viewport = page.getViewport({
                                scale: 0.2
                            });
                            canvas.width = viewport.width;
                            canvas.height = viewport.height;
                            const ctx = canvas.getContext('2d');
                            page.render({
                                canvasContext: ctx,
                                viewport: viewport
                            });
                        });
                    });
                };
                reader.readAsArrayBuffer(file);
            });

            const dataTransfer = new DataTransfer();
            filesArray.forEach(f => dataTransfer.items.add(f));
            fileInput.files = dataTransfer.files;
        }
    </script>
@endsection
