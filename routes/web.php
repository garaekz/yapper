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

    Route::get('/home', [YapController::class, 'index'])->name('home');
    Route::get('/explore', [YapController::class, 'index'])->name('explore');

    Route::post('/yaps', [YapController::class, 'store'])->name('yaps.store');
    Route::delete('/yaps/{yap}', [YapController::class, 'destroy'])->name('yaps.destroy');
});
