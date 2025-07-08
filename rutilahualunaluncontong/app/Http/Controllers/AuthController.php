<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt($request->only('nik','password'))){
            $roleName = Auth::user()->role->role_name;
            $url = $roleName.'_dashboard';
            return redirect()->route($url);
        }

        return redirect()->route('login')->with('error', 'nik dan password salah');
    }
}
