<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MissionController extends Controller
{
    public function index()
    {
        $missions = Mission::withCount('questions')
            ->orderBy('order')
            ->get();

        return view('admin.missions.index', compact('missions'));
    }

    public function create()
    {
        return view('admin.missions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'reading' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'order' => 'required|integer|min:1',
            'is_unlocked' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_unlocked'] = $request->boolean('is_unlocked');
        $data['is_active'] = $request->boolean('is_active');

        Mission::create($data);

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Misi berhasil ditambahkan.');
    }

    public function edit(Mission $mission)
    {
        return view('admin.missions.edit', compact('mission'));
    }

    public function update(Request $request, Mission $mission)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'reading' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'order' => 'required|integer|min:1',
            'is_unlocked' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_unlocked'] = $request->boolean('is_unlocked');
        $data['is_active'] = $request->boolean('is_active');

        $mission->update($data);

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Misi berhasil diperbarui.');
    }

    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect()
            ->route('admin.missions.index')
            ->with('success', 'Misi berhasil dihapus.');
    }
}