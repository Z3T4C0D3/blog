<?php

namespace App\Http\Controllers;

use App\Models\autores;
use App\Models\libros;
use App\Models\clasificaciones;
use App\Models\tags;
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
        $libros = libros::where('clasificaciones_id', $clasificaciones->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(5);

        return view('libros.clasificaciones', compact('libros', 'clasificaciones'));
    }
    public function tag(tags $tag){
        $libros = $tag->libros()->where('status', 2)->latest('id')->paginate(5);
        return view('libros.tag', compact('libros', 'tag'));

    }
    public function autor(autores $autor){
        $libros = $autor->libros()->where('status', 2)->latest('id')->paginate(5);
        return view('libros.autor', compact('libros', 'autor'));
    }

}
