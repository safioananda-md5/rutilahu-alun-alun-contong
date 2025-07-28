@extends('layouts.admin')

@section('content')
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h6 class="text-xl mb-0">Add New Post</h6>
                </div>
                <div class="card-body p-24">
                    <form action="#" class="d-flex flex-column gap-20">
                        <div>
                            <label class="form-label fw-bold text-neutral-900" for="title">Post Title: </label>
                            <input type="text" class="form-control border border-neutral-200 radius-8" id="title"
                                placeholder="Enter Post Title">
                        </div>
                        <div>
                            <label class="form-label fw-bold text-neutral-900">Post Category: </label>
                            <select class="form-control border border-neutral-200 radius-8">
                                <option value="">Technology</option>
                                <option value="">Business</option>
                                <option value="">Course</option>
                                <option value="">Fashion</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label fw-bold text-neutral-900">Post Description </label>
                            <div class="border border-neutral-200 radius-8 overflow-hidden">
                                <div class="height-200">
                                    <!-- Editor Toolbar Start -->
                                    <div id="toolbar-container">
                                        <span class="ql-formats">
                                            <select class="ql-font"></select>
                                            <select class="ql-size"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-color"></select>
                                            <select class="ql-background"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-script" value="sub"></button>
                                            <button class="ql-script" value="super"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-header" value="1"></button>
                                            <button class="ql-header" value="2"></button>
                                            <button class="ql-blockquote"></button>
                                            <button class="ql-code-block"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-direction" value="rtl"></button>
                                            <select class="ql-align"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                            <button class="ql-video"></button>
                                            <button class="ql-formula"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-clean"></button>
                                        </span>
                                    </div>
                                    <!-- Editor Toolbar Start -->

                                    <!-- Editor start -->
                                    <div id="editor">
                                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                            dolores explicabo corrupti, fuga</p>
                                        <p><br></p>
                                    </div>
                                    <!-- Edit End -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="form-label fw-bold text-neutral-900">Upload Thumbnail </label>
                            <div class="upload-image-wrapper">
                                <div
                                    class="uploaded-img d-none position-relative h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                    <button type="button"
                                        class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex bg-danger-600 w-40-px h-40-px justify-content-center align-items-center rounded-circle">
                                        <iconify-icon icon="radix-icons:cross-2" class="text-2xl text-white"></iconify-icon>
                                    </button>
                                    <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                        src="assets/images/user.png" alt="image">
                                </div>
                                <label
                                    class="upload-file h-160-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1"
                                    for="upload-file">
                                    <iconify-icon icon="solar:camera-outline"
                                        class="text-xl text-secondary-light"></iconify-icon>
                                    <span class="fw-semibold text-secondary-light">Upload</span>
                                    <input id="upload-file" type="file" hidden>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary-600 radius-8">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
