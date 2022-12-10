<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    public function getRouteKeyName(){
        return "slugLibros";
    }
    //RELACION UNO A MUCHOS INVERSA
    public function user(){
        return $this->belognsTo(User::class);
    }
    public function clasificaciones(){
        return $this->belongsTo(clasificaciones::class);
    }
    public function editorial(){
        return $this->belongsTo(editoriales::class);
    }
    //RELACION MUCHOS A MUCHOS
    public function tags(){
        return $this->belongsToMany(tags::class);
    }
    public function autores(){
        return $this->belongsToMany(autores::class);
    }
    //RELACION POLIMORFICA UNO A UNO
    public function image(){
        return $this->morphOne(images::class, 'imageable');
    }

    
}
