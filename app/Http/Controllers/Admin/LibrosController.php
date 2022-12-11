<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\autores;
use App\Models\editoriales;
use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\clasificaciones;
use App\Models\tags;
use App\Http\Requests\StoreLibrosRequest;
class LibrosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.libros.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $clasificaciones = clasificaciones::pluck('describeClasificacion', 'id');
        $editoriales = editoriales::pluck('describeEditorial', 'id');
        $tags = tags::all();
        //return $tags;
        $autores = autores::all();
        //return $clasificaciones;
        return view('admin.libros.create', compact('clasificaciones', 'tags', 'autores', 'editoriales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibrosRequest $request)
    {
        
        $libro = libros::create($request->all());

        if ($request->tags) {
            $libro->tags()->attach($request->tags);
        }
        if ($request->autores) {
            $libro->autores()->attach($request->autores);
            
        }
        //dd($request->all());
        return redirect()->route('admin.libros.index', $libro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libro)
    {
        return view('admin.libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(libros $libro)
    {
        return view('admin.libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,libros  $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros $libro)
    {
        //
    }
}
