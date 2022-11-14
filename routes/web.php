<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;



Route::get('/', [LibrosController::class, 'index'])->name('libros.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
