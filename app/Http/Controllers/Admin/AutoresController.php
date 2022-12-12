<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\autores;

class AutoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.autores.index')->only('index');
        $this->middleware('can:admin.autores.create')->only('create', 'store');
        $this->middleware('can:admin.autores.edit')->only('edit', 'update');
        $this->middleware('can:admin.autores.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = autores::all();
        return view('admin.autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => "required",
            'slugNombre' => "required|unique:autores",
        ]);
        $autor = autores::create($request->all());

        return redirect()->route('admin.autores.index', $autor)->with('alertCreated', 'El autor se agrego con éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(autores $autore)
    {
        return view('admin.autores.index', compact('autore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(autores $autore)
    {
        return view('admin.autores.edit', compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autores $autore)
    {
        $request -> validate([
            'nombre' => "required",
            'slugNombre' => "required|unique:autores,slugNombre,$autore->id",
        ]);

        $autore ->update($request->all());
        return redirect()->route('admin.autores.index', $autore)->with('alertEdit', 'El autor se actualizo con éxito')->with('alertEdit', 'El autor se modifico con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(autores $autore)
    {
        $autore->delete();
        return redirect()->route('admin.autores.index')->with('alertDelete', 'La etiqueta se eliminó con éxito');
    }
}
