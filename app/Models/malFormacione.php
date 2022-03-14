<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class malFormacione extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'id_nombremalformacion',
    'descripcion',
    'formacione_id'
  ];

  public function pacientes()
  {
    return $this->belongsToMany(
      Paciente::class,
      'mal_formaciones_has_pacientes',
      'paciente_id'
    )
      ->withPivot('mal_formacione_id')
      ->withTimestamps();
  }
}
