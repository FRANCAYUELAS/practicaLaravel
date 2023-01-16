<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //un alumno pertenece a un curso
    public function curso() {
        return $this->belongsTo(Curso::class);
    }
    //un alumno tiene un asiento
    public function asiento() {
        return $this->hasOne(Asiento::class);
    }
}
