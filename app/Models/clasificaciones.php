<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasificaciones extends Model
{
    use HasFactory;
    protected $fillable = ['describeClasificacion', 'slugClasificacion'];
    //RELACION UNO A MUCHOS
    public function libros(){
        return $this->hasMany(libros::class);
    }
}
