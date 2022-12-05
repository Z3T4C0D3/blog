<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clasificaciones;

class ClasificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificaciones = clasificaciones::all();
        return view('admin.clasificaciones.index', compact('clasificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clasificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'describeClasificacion' => 'required',
            'slugClasificacion' => 'required|unique:clasificaciones'
        ]);
        
        $clasificacion = clasificaciones::create($request->all());
        return redirect()->route('admin.clasificaciones.index', $clasificacion)->with('info', 'La clasificación se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(clasificaciones $clasificacione)
    {
        return view('admin.clasificaciones.show', compact('clasificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(clasificaciones $clasificacione)
    {
        return view('admin.clasificaciones.edit', compact('clasificacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,clasificaciones  $clasificacione)
    {
        $request->validate([
            'describeClasificacion' => 'required',
            'slugClasificacion' => "required|unique:clasificaciones,slugClasificacion,$clasificacione->id"
        ]);

        $clasificacione->update($request->all());

        return redirect()->route('admin.clasificaciones.edit', $clasificacione)->with('info', 'La clasificación se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(clasificaciones $clasificacione)
    {
        $clasificacione->delete();
        return redirect()->route('admin.clasificaciones.index')->with('alertDelete', 'La clasificación se elimino con éxito');
    }
}
