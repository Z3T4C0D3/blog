<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = editoriales::all();
        return view('admin.editoriales.index', compact('editoriales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editoriales.create');
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
            'describeEditorial' => "required",
            'slugEditorial' => "required|unique:editoriales",
        ]);
        $editoriale = editoriales::create($request->all());
        return redirect()->route('admin.editoriales.index', $editoriale)->with('alertCreated', 'La editorial se creo con éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(editoriales $editoriale)
    {
        return view('admin.editoriales.index', compact('editoriale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(editoriales $editoriale)
    {
        return view('admin.editoriales.edit', compact('editoriale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editoriales $editoriale)
    {
        $request -> validate([
            'describeEditorial' => "required",
            'slugEditorial' => "required|unique:editoriales,slugEditorial,$editoriale->id",
        ]);

        $editoriale ->update($request->all());
        return redirect()->route('admin.editoriales.index', $editoriale)->with('alertEdit', 'La editorial se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(editoriales $editoriale)
    {
        $editoriale->delete();
        return redirect()->route('admin.editoriales.index')->with('alertDelete', 'La editorial se eliminó con éxito');
    }
}
