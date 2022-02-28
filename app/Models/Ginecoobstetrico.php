<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ginecoobstetrico extends Model
{
  use HasFactory;

  protected $fillable = [
    'anteceInfeccion', 'gestas', 'paras', 'abortos', 'cesareas', 'ee', 'etg', 'fum', 'gestacional', 'gestacionalPrimera',
  ];
}
