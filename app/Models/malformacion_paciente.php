<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class malformacion_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
      'nombremalformacion_id',
      'paciente_id',
    ];

}
