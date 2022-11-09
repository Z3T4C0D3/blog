<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    //RELACION MUCHOS A MUCHOS
    public function tags(){
        return $this->belongsToMany(libros::class);
    }
    
}
