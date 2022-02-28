<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otrasSustancia extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',

  ];

  public function pacientes()
  {
    return $this->belongsToMany(
      Paciente::class,
      'otros_sustancias_has_pacientes',
      'paciente_id'
    )
      ->withPivot('otros_toxicos_id')
      ->withTimestamps();
  }
}
