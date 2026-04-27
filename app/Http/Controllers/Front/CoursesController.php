<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CourseEnrollment;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('front.courses');
    }

    public function enroll(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:100',
            'phone'     => 'required|string|max:20',
            'email'     => 'nullable|email|max:100',
            'course'    => 'required|in:n5,n4,visa_processing,interview_prep',
            'education' => 'nullable|string|max:100',
            'message'   => 'nullable|string|max:1000',
        ]);

        CourseEnrollment::create($validated);

        return back()->with('success', 'আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব। ধন্যবাদ!');
    }
}
