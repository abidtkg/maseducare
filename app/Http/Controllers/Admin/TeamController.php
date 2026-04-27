<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $members = TeamMember::orderBy('sort_order')->get();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'title'      => 'required|string|max:100',
            'type'       => 'required|in:sensei,staff,founder',
            'bio'        => 'nullable|string',
            'photo'      => 'nullable|image|max:2048',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'nullable|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $this->uploadImage($request, 'photo', 'team', 400);
        }

        $validated['is_active'] = $request->boolean('is_active', true);
        TeamMember::create($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    public function show(TeamMember $team) {}

    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, TeamMember $team)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'title'      => 'required|string|max:100',
            'type'       => 'required|in:sensei,staff,founder',
            'bio'        => 'nullable|string',
            'photo'      => 'nullable|image|max:2048',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'nullable|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $this->deleteImage($team->photo);
            $validated['photo'] = $this->uploadImage($request, 'photo', 'team', 400);
        }

        $validated['is_active'] = $request->boolean('is_active');
        $team->update($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(TeamMember $team)
    {
        $this->deleteImage($team->photo);
        $team->delete();

        return back()->with('success', 'Team member deleted.');
    }
}
