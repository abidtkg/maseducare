<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\CourseEnrollment;
use App\Models\GalleryItem;
use App\Models\TeamMember;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'new_enrollments'  => CourseEnrollment::where('status', 'new')->count(),
            'unread_messages'  => ContactMessage::where('is_read', false)->count(),
            'gallery_items'    => GalleryItem::count(),
            'team_members'     => TeamMember::where('is_active', true)->count(),
        ];

        $recentEnrollments = CourseEnrollment::latest()->take(10)->get();
        $recentMessages    = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentEnrollments', 'recentMessages'));
    }
}
