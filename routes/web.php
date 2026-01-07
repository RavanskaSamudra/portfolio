<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('skills', SkillController::class);
        Route::resource('projects', ProjectController::class);

        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
