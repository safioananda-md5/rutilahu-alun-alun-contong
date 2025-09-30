<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>403 - Tidak Memiliki Hak Akses</title>
    <link rel="icon" href="{{ asset('assets/images/errors/403.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .text-3d {
            font-size: 60px;
            font-weight: bold;
            color: #222;
            text-shadow:
                0 1px 0 #555,
                0 2px 0 #555,
                0 3px 0 #555,
                0 4px 0 #555,
                0 5px 0 #555,
                0 6px 0 #555,
                0 7px 0 #555,
                0 8px 0 #555,
                0 9px 0 #555,
                0 10px 5px rgba(0, 0, 0, 0.5);
        }

        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">
    <div class="text-center">
        {{-- <h1 class="display-1 fw-bold text-danger">404</h1>
        <h2 class="mb-3">Oops! Halaman tidak ditemukan</h2> --}}
        <figure class="text-end">
            <blockquote class="blockquote">
                <p class="h1 text-warning text-3d">403</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Forbidden!</cite> akses terbatas
            </figcaption>
        </figure>
        <a href="javascript:window.history.back()" class="btn btn-outline-primary">Kembali ke Sebelumnya</a>
    </div>
</body>

</html>
