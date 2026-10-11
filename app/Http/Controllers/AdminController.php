<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Question;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::where('role', 'student')->count();

        $totalMissions = Mission::count();

        $activeMissions = Mission::where('is_active', true)->count();

        $totalQuestions = Question::count();

        $missions = Mission::withCount('questions')
            ->orderBy('order')
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalMissions',
            'activeMissions',
            'totalQuestions',
            'missions'
        ));
    }
}