<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use HandlesImageUpload;

    public function index(Request $request)
    {
        $category = $request->query('category');
        $query    = GalleryItem::orderBy('sort_order');
        if ($category) {
            $query->where('category', $category);
        }
        $items      = $query->get();
        $categories = GalleryItem::$categoryLabels;

        return view('admin.gallery.index', compact('items', 'categories', 'category'));
    }

    public function create()
    {
        $categories = GalleryItem::$categoryLabels;
        return view('admin.gallery.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:150',
            'caption'    => 'nullable|string',
            'category'   => 'required|in:' . implode(',', array_keys(GalleryItem::$categoryLabels)),
            'image'      => 'required|image|max:5120',
            'sort_order' => 'nullable|integer',
            'is_featured'=> 'nullable|boolean',
            'is_active'  => 'nullable|boolean',
        ]);

        $path = $this->uploadImage($request, 'image', 'gallery', 1920);

        GalleryItem::create([
            'title'       => $request->title,
            'caption'     => $request->caption,
            'category'    => $request->category,
            'image'       => $path,
            'sort_order'  => $request->sort_order ?? 0,
            'is_featured' => $request->boolean('is_featured'),
            'is_active'   => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item added.');
    }

    public function show(GalleryItem $gallery) {}

    public function edit(GalleryItem $gallery)
    {
        $categories = GalleryItem::$categoryLabels;
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $request->validate([
            'title'      => 'required|string|max:150',
            'caption'    => 'nullable|string',
            'category'   => 'required|in:' . implode(',', array_keys(GalleryItem::$categoryLabels)),
            'image'      => 'nullable|image|max:5120',
            'sort_order' => 'nullable|integer',
            'is_featured'=> 'nullable|boolean',
            'is_active'  => 'nullable|boolean',
        ]);

        $data = [
            'title'       => $request->title,
            'caption'     => $request->caption,
            'category'    => $request->category,
            'sort_order'  => $request->sort_order ?? 0,
            'is_featured' => $request->boolean('is_featured'),
            'is_active'   => $request->boolean('is_active'),
        ];

        if ($request->hasFile('image')) {
            $this->deleteImage($gallery->image);
            $data['image'] = $this->uploadImage($request, 'image', 'gallery', 1920);
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated.');
    }

    public function destroy(GalleryItem $gallery)
    {
        $this->deleteImage($gallery->image);
        $gallery->delete();

        return back()->with('success', 'Gallery item deleted.');
    }
}
