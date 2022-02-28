<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'lastname',
    'phone',
    'ocupacion',
    'cedula',
    'id_estado',
    'id_ciudad',
    'id_enfermedadCronica',
    'edad',
    'plantilla',
    'id_embarazo',
    'id_biopsicosociales',
    'id_ginecoobstetrico',
    'direccion',
    'edoCivil',

  ];

  public function drogas()
  {
    return $this->belongsToMany(
      Droga::class,
      'drogas_has_pacientes',
      'paciente_id'
    )
      ->withPivot('droga_id')
      ->withTimestamps();
  }

  public function malFormacione()
  {
    return $this->belongsToMany(
      malFormacione::class,
      'mal_formaciones_has_pacientes',
      'paciente_id'
    )
      ->withPivot('mal_formacione_id')
      ->withTimestamps();
  }

  public function sustanciasToxica()
  {
    return $this->belongsToMany(
      sustanciasToxica::class,
      'sustancias_toxicas_has_pacientes',
      'paciente_id'
    )
      ->withPivot('sustancias_toxica_id')
      ->withTimestamps();
  }

  public function otrostoxicos()
  {
    return $this->belongsToMany(
      otrasSustancia::class,
      'otros_sustancias_has_pacientes',
      'paciente_id'
    )
      ->withPivot('otros_toxicos_id')
      ->withTimestamps();
  }
}
