<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embarazo extends Model
{
  use HasFactory;

  protected $fillable = [
    'embarazo', 'feto', 'situacion', 'presentacion', 'posicion'
  ];
}
