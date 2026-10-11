<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Admin\MissionController as AdminMissionController;
use App\Http\Controllers\Student\MissionController as StudentMissionController;
use App\Http\Controllers\Student\PasarMissionController;
// Landing
Route::get('/', function () {
    return view('welcome');
})->name('home');


// ==========================
// AUTH
// ==========================

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.process');
});


// ==========================
// USER
// ==========================

Route::middleware('auth')->group(function () {

    Route::get('/map', [MapController::class, 'index'])
        ->name('map');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

        Route::get('/profil', [ProfileController::class, 'show'])
    ->name('student.profile');

Route::get('/pengaturan', [ProfileController::class, 'edit'])
    ->name('student.settings');

Route::put('/pengaturan', [ProfileController::class, 'update'])
    ->name('student.settings.update');
   
    
Route::post(
    '/missions/{mission}/complete',
    [StudentMissionController::class, 'complete']
)->name('missions.complete');
   
Route::get('/misi/candi', [StudentMissionController::class, 'candi'])
    ->name('candi');
    Route::post('/misi/candi/jawab', [StudentMissionController::class, 'answer'])
    ->name('candi.answer');

Route::post('/misi/candi/refleksi', [StudentMissionController::class, 'reflection'])
    ->name('candi.reflection');
    
 Route::get('/misi/pasar', [
        PasarMissionController::class,
        'index'
    ])->name('pasar');


Route::post('/misi/pasar/jawaban', [
    PasarMissionController::class,
    'answer'
])->name('pasar.answer');

Route::post('/misi/pasar/selesai/{mission}', [
    PasarMissionController::class,
    'complete'
])->name('pasar.complete');

Route::post('/misi/pasar/refleksi', [
    PasarMissionController::class,
    'reflection'
])->name('pasar.reflection');
});


// ==========================
// ADMIN
// ==========================

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');

        Route::get('/missions', [AdminMissionController::class, 'index'])
            ->name('admin.missions.index');

        Route::get('/missions/create', [AdminMissionController::class, 'create'])
            ->name('admin.missions.create');

        Route::post('/missions', [AdminMissionController::class, 'store'])
            ->name('admin.missions.store');

        Route::get('/missions/{mission}/edit', [AdminMissionController::class, 'edit'])
            ->name('admin.missions.edit');

        Route::put('/missions/{mission}', [AdminMissionController::class, 'update'])
            ->name('admin.missions.update');

        Route::delete('/missions/{mission}', [AdminMissionController::class, 'destroy'])
            ->name('admin.missions.destroy');

        Route::get('/students', [StudentController::class, 'index'])
    ->name('admin.students.index');


// Letakkan di dalam grup route admin
Route::get('/students/{student}', [StudentController::class, 'show'])
    ->name('admin.students.show');


    // SOAL PER MISI
Route::get('/missions/{mission}/questions', [QuestionController::class, 'index'])
    ->name('admin.missions.questions.index');

Route::get('/missions/{mission}/questions/create', [QuestionController::class, 'create'])
    ->name('admin.missions.questions.create');

Route::post('/missions/{mission}/questions', [QuestionController::class, 'store'])
    ->name('admin.missions.questions.store');

Route::get('/missions/{mission}/questions/{question}/edit', [QuestionController::class, 'edit'])
    ->name('admin.missions.questions.edit');

Route::put('/missions/{mission}/questions/{question}', [QuestionController::class, 'update'])
    ->name('admin.missions.questions.update');

Route::delete('/missions/{mission}/questions/{question}', [QuestionController::class, 'destroy'])
    ->name('admin.missions.questions.destroy');
    });