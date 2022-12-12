<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibrosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user_id == auth()->user()->id) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'titulo' => 'required',
            'slugLibros' => 'required|unique:libros',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];
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
