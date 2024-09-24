<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['postulante', 'nota1', 'nota2', 'nota3', 'nota4', 'nota5', 'nota6', 'nota7', 
                            'tema', 'interaccion', 'respuestas', 'total1', 'total2'];

    // protected $table = 'notas';

    // protected $fillable = [
        
    // ];
}
