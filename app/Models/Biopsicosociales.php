<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biopsicosociales extends Model
{
  use HasFactory;

  protected $fillable = [
    'alcohol', 'drogas', 'tabaco', 'sustanciastoxicas', 'otros', 'observacion'
  ];
}
