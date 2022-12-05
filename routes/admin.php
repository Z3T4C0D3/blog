<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClasificacionesController;
use App\Http\Controllers\Admin\TagController;


Route::get('', [HomeController::class, 'index'] )->name('admin.home');
Route::resource('clasificaciones', ClasificacionesController::class)->names('admin.clasificaciones');
Route::resource('tags', TagController::class)->names('admin.tags');