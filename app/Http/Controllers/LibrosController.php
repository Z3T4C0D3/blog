<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = libros::where('status', 2)->latest('id')->paginate(8);
        return view('libros.index', compact('libros'));
    }
}
