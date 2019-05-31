<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasePublicacion extends Model
{
    protected $table = 'fase_publicacion';

    protected $fillable = [
        'fecha',
    ];

    public function fases(){
        return $this->hasMany(Fase::class)->withTimestamps();
    }
    public function publicaciones(){
        return $this->hasMany(Publicacion::class)->withTimestamps();
    }
}
