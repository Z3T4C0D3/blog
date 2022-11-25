<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;



Route::get('/', [LibrosController::class, 'index'])->name('libros.index');
Route::get('libros/{libro}', [LibrosController::class, 'show'])->name('libros.show');
Route::get('clasificaciones/{clasificaciones}', [LibrosController::class, 'clasificaciones'])->name('libros.clasificaciones');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
