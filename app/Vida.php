<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vida extends Model
{
    protected $fillable = ['titulo', 'entidad', 'fecha', 'documento'];
}
