<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Droga extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',

  ];

  public function pacientes()
  {
    return $this->belongsToMany(
      Paciente::class,
      'drogas_has_pacientes',
      'paciente_id'
    )
      ->withPivot('droga_id')
      ->withTimestamps();
  }
}
