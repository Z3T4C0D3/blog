<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibrosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $libro = $this->route()->parameter('libro');
        $rules = [
            'titulo' => 'required',
            'slugLibros' => 'required|unique:libros',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];
        if ($libro) {
            $rules['slugLibros'] = 'required|unique:libros,slugLibros,'.$libro->id;
        }
        if ($this->status == 2) {
            $rules = array_merge($rules,[
                'codigo' => 'required',
                'clasificaciones_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'autores' => 'required', 
                'id_editorial' => 'required',
                'anioPublicacion' => 'required',
            ]);

        }
        return $rules;

    }
}
