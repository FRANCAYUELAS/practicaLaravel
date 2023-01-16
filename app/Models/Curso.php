<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //un curso tiene mucho alumnos
    public function alumnos() {
        return $this->hasMany(Alumno::class);
    }
}
