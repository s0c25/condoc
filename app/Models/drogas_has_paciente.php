<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drogas_has_paciente extends Model
{
    use HasFactory;

    protected $fillable = [
      'droga_id',
      'paciente_id',
    ];
}
