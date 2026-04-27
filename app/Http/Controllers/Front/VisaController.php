<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;

class VisaController extends Controller
{
    public function index()
    {
        $visaGallery = GalleryItem::active()
            ->whereIn('category', ['visa_success', 'celebration', 'visa_document'])
            ->get();

        return view('front.visa', compact('visaGallery'));
    }
}
