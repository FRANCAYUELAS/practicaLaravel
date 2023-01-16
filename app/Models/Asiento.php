<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    use HasFactory;
    //un asiento pertenece a un alumno
    public function alumno() {
        return $this->belongsTo(Alumno::class);
    }
}
