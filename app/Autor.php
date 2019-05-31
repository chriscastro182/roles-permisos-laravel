<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = [
        'calle', 'ext', 'int',
        'colonia', 'cp', 'municipio',
        'estado',
    ];

    public function publicaciones(){
        return $this->belongsToMany(Publicacion::class,'autor_publication')->withTimestamps();
    }

}
