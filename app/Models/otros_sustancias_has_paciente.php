<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otros_sustancias_has_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
      'farmaco_id',
      'paciente_id',
    ];
}
