<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mal_formaciones_has_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
      'mal_formacione_id',
      'paciente_id',
    ];
}
