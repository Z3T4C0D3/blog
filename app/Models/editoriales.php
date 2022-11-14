<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editoriales extends Model
{
    use HasFactory;
    
    //RELACION UNO A MUCHOS
    /*public function libros(){
        return $this->hasMany(libros::class);
    }*/
}
