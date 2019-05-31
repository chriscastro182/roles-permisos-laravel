<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function publicaciones(){
        return $this->belongsToMany(Publicacion::class,'fase_publicacion')->withTimestamps();
    }
}
