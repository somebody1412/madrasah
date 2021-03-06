<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('page.web.index');
    }

    public function feature()
    {
        return view('page.web.feature');
    }

    public function elearning()
    {
        return view('page.web.elearning');
    }

    public function register()
    {
        return view('page.web.register');
    }
}
