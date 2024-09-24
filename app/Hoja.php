<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoja extends Model
{
    protected $fillable = ['titulo', 'entidad', 'fecha', 'documento'];

    // public function estudiante()
    // {
    //     return $this->belongsTo(Estudiante::class);
    // }
}
