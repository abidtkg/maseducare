<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $testimonials = Testimonial::orderBy('sort_order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:100',
            'achievement'  => 'nullable|string|max:100',
            'quote'        => 'required|string',
            'batch'        => 'nullable|string|max:50',
            'photo'        => 'nullable|image|max:2048',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = $request->only(['student_name', 'achievement', 'quote', 'batch', 'sort_order']);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->uploadImage($request, 'photo', 'testimonials', 300);
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added.');
    }

    public function show(Testimonial $testimonial) {}

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'student_name' => 'required|string|max:100',
            'achievement'  => 'nullable|string|max:100',
            'quote'        => 'required|string',
            'batch'        => 'nullable|string|max:50',
            'photo'        => 'nullable|image|max:2048',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = $request->only(['student_name', 'achievement', 'quote', 'batch', 'sort_order']);
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('photo')) {
            $this->deleteImage($testimonial->photo);
            $data['photo'] = $this->uploadImage($request, 'photo', 'testimonials', 300);
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $this->deleteImage($testimonial->photo);
        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted.');
    }
}
