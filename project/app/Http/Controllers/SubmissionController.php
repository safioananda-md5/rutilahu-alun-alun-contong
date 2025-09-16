<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(){
        return view('page.submission.index');
    }

    public function create(){
        return view('page.submission.form');
    }
}
