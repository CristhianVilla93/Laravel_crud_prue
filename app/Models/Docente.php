<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
use App\Models\Curso;

class Docente extends Model
{
    use HasFactory;

    // relacion muchos a muchos con Alumnos
    public function alumnos(){
        return $this->belongsToMany(Alumno::class);
    }

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
}
