<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');


Route::get('/track', [\App\Http\Controllers\TrackController::class, 'index'])
->name('track.index');

Route::get('track/create', [\App\Http\Controllers\TrackController::class, 'create'])
    ->name('track.create');

Route::get('/track/{track}', [\App\Http\Controllers\TrackController::class, 'show'])
->name('track.show');

Route::post('/track', [\App\Http\Controllers\TrackController::class, 'store'])
->name('track.store');

Route::put('/track/{track}/update', [\App\Http\Controllers\TrackController::class, 'update'])
    ->name('track.update');

Route::get('/track/{track}/edit', [\App\Http\Controllers\TrackController::class, 'edit'])
    ->name('track.edit');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
