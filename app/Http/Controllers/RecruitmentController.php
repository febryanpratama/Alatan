<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    //

    public function index()
    {
        // dd("ok");
        return view('pages.back.recruitment.index');
    }
}
