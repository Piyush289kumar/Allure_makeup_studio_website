<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('layouts.pages.home');
    }

    public function about()
    {
        return view('layouts.pages.about');
    }
}
