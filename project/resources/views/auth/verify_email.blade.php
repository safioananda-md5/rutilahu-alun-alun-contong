@extends('layouts.auth')
@section('title', 'Verifikasi Email | Rutilahu Alun-Alun Contong Kota Surabaya')

@section('content')
    <div class="container">
        <h2>Verifikasi Email</h2>
        <p>Silakan cek email Anda dan klik link verifikasi.</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Kirim ulang link verifikasi</button>
        </form>
    </div>
@endsection
