<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $fillable = [
        'titulo', 'fechaRecibido',
    ];

    public function autores(){
        return $this->belongsToMany(Autor::class,'autor_publication')->withTimestamps();
    }
    public function fases(){
        return $this->belongsToMany(Fase::class,'fase_publicacion')->withTimestamps();
    }
}
