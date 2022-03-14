<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nombremalformacion extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'paciente_id',
    ];
}
