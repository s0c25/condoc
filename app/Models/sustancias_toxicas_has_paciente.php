<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sustancias_toxicas_has_paciente extends Model
{
    use HasFactory;

   protected $fillable = [
      'sustancias_toxica_id',
      'paciente_id',
    ];
}
