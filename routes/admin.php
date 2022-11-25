<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClasificacionesController;


Route::get('', [HomeController::class, 'index'] )->name('admin.home');
Route::resource('clasificaciones', ClasificacionesController::class)->names('admin.clasificaciones');