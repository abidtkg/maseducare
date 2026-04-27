<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseEnrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index(Request $request)
    {
        $query = CourseEnrollment::latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('course')) {
            $query->where('course', $request->course);
        }

        $enrollments = $query->paginate(20);
        $courseLabels = CourseEnrollment::$courseLabels;
        $statusLabels = CourseEnrollment::$statusLabels;

        return view('admin.enrollments.index', compact('enrollments', 'courseLabels', 'statusLabels'));
    }

    public function show(CourseEnrollment $enrollment)
    {
        $courseLabels = CourseEnrollment::$courseLabels;
        $statusLabels = CourseEnrollment::$statusLabels;
        return view('admin.enrollments.show', compact('enrollment', 'courseLabels', 'statusLabels'));
    }

    public function update(Request $request, CourseEnrollment $enrollment)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,enrolled,rejected',
            'notes'  => 'nullable|string',
        ]);

        $enrollment->update($request->only('status', 'notes'));

        return back()->with('success', 'Enrollment updated.');
    }
}
