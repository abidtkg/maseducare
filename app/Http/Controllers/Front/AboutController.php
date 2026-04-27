<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $team = TeamMember::active()->get();
        return view('front.about', compact('team'));
    }
}
