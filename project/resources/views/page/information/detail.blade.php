@extends('layouts.master')

@section('content')
    <section class="news-details mt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="data:image/jpeg;base64,{{ $informasi->imagebig }}" alt="">
                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-details__meta">
                                <li>
                                    @if ($informasi->updated_at->eq($informasi->created_at))
                                        <a href="#" class="disabled-link"><i class="far fa-calendar me-1"></i>
                                            {{ \Carbon\Carbon::parse($informasi->updated_at)->translatedFormat('d F, Y') }}
                                            - {{ $informasi->updated_at->diffForHumans() }}
                                        </a>
                                    @else
                                        <a href="#" class="disabled-link"><i class="far fa-calendar me-1"></i>
                                            {{ \Carbon\Carbon::parse($informasi->updated_at)->translatedFormat('d F, Y') }}
                                            - {{ $informasi->updated_at->diffForHumans() }}
                                            (telah diubah)
                                        </a>
                                    @endif
                                </li>
                                <li><a href="#" class="disabled-link"><i class="far fa-user"></i> Admin </a>
                                </li>
                            </ul>
                            <h3 class="news-details__title">{{ $informasi->title }}</h3>
                            <div class="news-details__text-1">{!! $informasi->body !!}</div>
                            @forelse ($files as $f)
                                @if ($loop->first)
                                    <hr style="margin-top: 56px">
                                    <h5>Unduh Lampiran: </h5>
                                    <ul>
                                @endif
                                <li class="my-2">
                                    <a href="data:application/pdf;base64,{{ $f['file'] }}"
                                        download="{{ $f['name'] }}">
                                        <i class="fas fa-download text-primary"></i> {{ $f['name'] }}
                                    </a>
                                </li>
                                @if ($loop->last)
                                    </ul>
                                @endif
                            @empty
                            @endforelse
                        </div>
                        <div class="news-details__bottom">
                            <div class="news-details__social-list">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    <sup><i class="fas fa-share"></i></sup><sub><i class="fab fa-facebook"></i></sub>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{ urlencode(
                                    'Simak update terbaru tentang program Rutilahu di Kelurahan Alun-Alun Contong, Surabaya. Jangan sampai ketinggalan!: ' .
                                        request()->fullUrl(),
                                ) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    <sup><i class="fas fa-share"></i></sup><sub><i class="fab fa-whatsapp"></i></sub>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .news-details__text-1 h1 {
            font-size: 2em;
            font-weight: bold;
            margin: 0.67em 0;
        }

        .news-details__text-1 h2 {
            font-size: 1.75em;
            font-weight: bold;
            margin: 0.75em 0;
        }

        .news-details__text-1 h3 {
            font-size: 1.5em;
            font-weight: bold;
            margin: 0.83em 0;
        }

        .news-details__text-1 h4 {
            font-size: 1.25em;
            font-weight: bold;
            margin: 1em 0;
        }

        .news-details__text-1 h5 {
            font-size: 1em;
            font-weight: bold;
            margin: 1.33em 0;
        }

        .news-details__text-1 h6 {
            font-size: 0.875em;
            font-weight: bold;
            margin: 1.67em 0;
        }

        .news-details__text-1 i {
            font-style: italic !important;
        }

        .news-details__text-1 b {
            font-weight: bold !important;
        }

        .news-details__text-1 u {
            text-decoration: underline !important;
        }

        .news-details__text-1 blockquote {
            border-left: 4px solid #007bff;
            padding-left: 15px;
            margin: 10px 0;
            color: #555;
            font-style: italic;
            background-color: #f9f9f9;
        }

        .news-details__text-1 s,
        .news-details__text-1 strike {
            text-decoration: line-through;
        }

        .news-details__text-1 ul {
            list-style-type: disc;
            margin: 10px 0;
            padding-left: 20px;
            color: #333;
        }

        .news-details__text-1 li {
            margin-bottom: 5px;
            line-height: 1.5;
        }

        .news-details__text-1 ol {
            list-style-type: decimal;
            margin: 10px 0;
            padding-left: 20px;
            color: #333;
        }

        .news-details__text-1 pre {
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

        .news-details__text-1 a {
            color: #007bff;
        }

        .news-details__text-1 a:hover {
            color: #ff4000b7;
        }
    </style>
@endsection
