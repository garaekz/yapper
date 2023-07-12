<?php

use App\Http\Controllers\YapController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::get('/home', function () {
        return Inertia::render('Home');
    })->name('home');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::post('/yaps', [YapController::class, 'store'])->name('yaps.store');
    Route::delete('/yaps/{yap}', [YapController::class, 'destroy'])->name('yaps.destroy');
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
