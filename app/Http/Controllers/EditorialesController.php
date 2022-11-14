<?php

namespace App\Http\Controllers;

use App\Models\editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    public function index()
    {
        $editoriales = editoriales::all();
        return view('libros.index', compact('editoriales'));
    }
}
