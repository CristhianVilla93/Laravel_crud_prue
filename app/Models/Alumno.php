<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docente;

class Alumno extends Model
{
    use HasFactory;

    // relacion muchos a muchos
    public function docentes(){
        return $this->belongsToMany(Docente::class);
    }

}
