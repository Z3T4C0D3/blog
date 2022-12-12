<?php


use App\Http\Controllers\Admin\AutoresController;
use App\Http\Controllers\Admin\EditorialesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ClasificacionesController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\LibrosController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;


Route::get('', [HomeController::class, 'index'] )->middleware('can:admin.home')->name('admin.home');
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('clasificaciones', ClasificacionesController::class)->except('show')->names('admin.clasificaciones');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('autores', AutoresController::class)->except('show')->names('admin.autores');
Route::resource('editoriales', EditorialesController::class)->except('show')->names('admin.editoriales');
Route::resource('libros', LibrosController::class)->except('show')->names('admin.libros');