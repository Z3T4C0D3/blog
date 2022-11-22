<?php

namespace App\Http\Controllers;

use App\Models\libros;
use App\Models\clasificaciones;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = libros::where('status', 2)->latest('id')->paginate(8);
        return view('libros.index', compact('libros'));
    }
    public function show(libros $libro){
        $similares= libros::where('clasificaciones_id', $libro->clasificaciones_id)
            ->where('status' , 2)
            ->where('id', '!=', $libro->id)
            ->latest('id')
            ->take(4)
            ->get();
        return view('libros.show', compact('libro', 'similares'));
    }

    public function clasificaciones(clasificaciones $clasificaciones){
        return $clasificaciones;
    }

}
