<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sustanciasToxica extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',

  ];

  public function pacientes()
  {
    return $this->belongsToMany(
      Paciente::class,
      'sustancias_toxicas_has_pacientes',
      'paciente_id'
    )
      ->withPivot('sustancias_toxica_id')
      ->withTimestamps();
  }
}
