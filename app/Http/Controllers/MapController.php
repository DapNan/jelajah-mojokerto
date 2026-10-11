<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProgress;

class MapController extends Controller
{
public function index()
{
    $user = Auth::user();

    $missions = Mission::where('is_active', true)
        ->orderBy('order')
        ->get();

    $progressByMission = UserProgress::where('user_id', $user->id)
        ->get()
        ->keyBy('mission_id');

    $unlockedMissions = collect();

    foreach ($missions as $index => $mission) {
        // Misi pertama selalu terbuka.
        if ($index === 0) {
            $unlockedMissions->push($mission->id);
            continue;
        }

        // Misi berikutnya terbuka jika misi sebelumnya selesai.
        $previousMission = $missions[$index - 1];

        $previousProgress = $progressByMission->get(
            $previousMission->id
        );

        if ($previousProgress && $previousProgress->is_completed) {
            $unlockedMissions->push($mission->id);
        }
    }

    return view('map', compact(
        'user',
        'missions',
        'progressByMission',
        'unlockedMissions'
    ));
}
}