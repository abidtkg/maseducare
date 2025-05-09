<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }
    
    public function courses()
    {
        return view('web.courses');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function gallery()
    {
        return view('web.gallery');
    }
}