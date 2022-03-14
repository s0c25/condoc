<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enfermedad_cronica_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
      'enfermedadCronica_id',
      'paciente_id',
    ];
}
