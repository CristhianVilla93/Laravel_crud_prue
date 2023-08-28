<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Docente;

class Curso extends Model
{
    use HasFactory;

    public function docentes(){
        return $this->belongsToMany(Docente::class);
    }

}
