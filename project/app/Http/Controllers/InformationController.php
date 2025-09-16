<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        return view('page.information.index');
    }

    public function detail(){
        return view('page.information.detail');
    }
}
