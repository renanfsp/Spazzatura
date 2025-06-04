<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/comercio', function () {
        return Inertia::render('dashboard/comercio');
    })->middleware('comercio')->name('dashboard.comercio');

    Route::get('/dashboard/cooperativa', function () {
        return Inertia::render('dashboard/cooperativa');
    })->middleware('cooperativa')->name('dashboard.cooperativa');

    Route::get('/dashboard/coletor', function () {
        return Inertia::render('dashboard/coletor');
    })->middleware('coletor')->name('dashboard.coletor');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
