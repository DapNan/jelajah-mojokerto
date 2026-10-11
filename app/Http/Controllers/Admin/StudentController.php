<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProgress;
use App\Models\MissionReflection;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')
            ->orderBy('name')
            ->get();

        return view('admin.students.index', compact('students'));
    }
      public function show(User $student)
    {
        // Ambil progres seluruh misi milik siswa
        $progress = UserProgress::with('mission')
            ->where('user_id', $student->id)
            ->get();

        // Ambil refleksi yang pernah dikirim siswa
        $reflections = MissionReflection::with('mission')
            ->where('user_id', $student->id)
            ->latest()
            ->get();

        return view('admin.students.show', compact(
            'student',
            'progress',
            'reflections'
        ));
    }
}