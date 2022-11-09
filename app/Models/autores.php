<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autores extends Model
{
    use HasFactory;
    //RELACION MUCHOS A MUCHOS
    public function autores(){
        return $this->belongsToMany(autores::class);
    }
}
