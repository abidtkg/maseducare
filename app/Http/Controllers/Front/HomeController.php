<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredGallery = GalleryItem::featured()->orderBy('sort_order')->take(8)->get();
        $testimonials    = Testimonial::active()->get();

        return view('front.home', compact('featuredGallery', 'testimonials'));
    }
}
