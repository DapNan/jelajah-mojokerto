<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
// use App\Models\Mission;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
{
    $user = \App\Models\User::findOrFail(auth()->id());

    $progress = $user->progress()
        ->with('mission')
        ->get();

    $completedMissions = $progress
        ->where('is_completed', true)
        ->count();

    $totalMissions = \App\Models\Mission::where('is_active', true)
        ->count();

    return view('student.profile', compact(
        'user',
        'progress',
        'completedMissions',
        'totalMissions'
    ));
}

    public function edit()
    {
        return view('student.settings', [
            'user' => auth()->user(),
        ]);
    }

public function update(Request $request)
{
    $user = User::findOrFail(auth()->id());

    // Validasi data profil tanpa validasi password terlebih dahulu
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'bio' => 'nullable|string|max:500',
       'avatar' => 'nullable|in:avatars1.jpg,avatars2.jpg,avatars3.jpg,avatars4.jpg,avatars5.jpg,avatars6.jpg,avatars7.jpg,avatars8.jpg',
    ], [
        'name.required' => 'Nama tidak boleh kosong.',
        'email.required' => 'Email tidak boleh kosong.',
        'email.unique' => 'Email sudah digunakan akun lain.',
        'avatar.image' => 'File avatar harus berupa gambar.',
        'avatar.max' => 'Ukuran foto maksimal 2 MB.',
    ]);

    // Validasi password hanya jika password baru diisi
    if ($request->filled('password')) {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'current_password.required' => 'Masukkan password lama untuk mengganti password.',
            'current_password.current_password' => 'Password lama tidak sesuai.',
            'password.min' => 'Password baru minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        $user->password = Hash::make($request->password);
    }

    // Simpan data profil
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->bio = $data['bio'] ?? null;

if ($request->filled('avatar')) {
    $user->avatar = $request->input('avatar');
}
    $user->save();

    return redirect()
        ->route('student.settings')
        ->with('success', 'Pengaturan profil berhasil disimpan!');
}

}
