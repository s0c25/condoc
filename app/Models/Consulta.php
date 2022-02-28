<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
  use HasFactory;

  protected $fillable = [
    'id_paciente',
    'end_at',
    'observacion',
    'observacion2',
    'observacion3',
    'id_estatu',

  ];
}
