<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/welcome', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/', function() { 
    return view ('frontend.index-3');
})->name('nest');
Route::get('/hello1', function() { 
    return view ('frontend.index-2');
})->name('ijk');
Route::get('/hello2', function() { 
    return view ('frontend.index');
})->name('geh');
Route::get('/hello3', function() { 
    return view ('frontend.index-4');
})->name('def');
Route::get('/hello4', function() { 
    return view ('frontend.blog');
})->name('abc');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
