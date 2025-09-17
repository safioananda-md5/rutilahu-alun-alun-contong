<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // flash()->addSuccess('Data penyewaan berhasil ditambahkan.');
        return view('auth.login');
    }
}
