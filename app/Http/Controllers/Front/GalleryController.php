<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $query = GalleryItem::active();

        if ($category && $category !== 'all') {
            $query->where('category', $category);
        }

        $items      = $query->orderBy('sort_order')->get();
        $categories = GalleryItem::$categoryLabels;

        return view('front.gallery', compact('items', 'categories', 'category'));
    }
}
