<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\malFormacione;
use App\Models\Malformaciones;
use App\Models\nombremalformacion;
use App\Models\formaciones;
use App\Models\Embarazo;
use App\Models\Ginecoobstetrico;
use App\Models\Biopsicosociales;
use App\Models\Paciente;
use App\Models\Consulta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\sustancias_toxicas_has_paciente;
use App\Models\otros_sustancias_has_paciente;
use App\Models\enfermedad_cronica_paciente;
use App\Models\malformacion_paciente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use PDF;
use Sabberworm\CSS\Property\Charset;

class Alfonzo extends ModalComponent
{
  public $listMalformacion,$selectMalformacion,$nombreMalformacion,$mfm,$estados,$mff;

  public static function modalMaxWidth(): string
  {
    // 'sm'
    // 'md'
    // 'lg'
    // 'xl'
    // '2xl'
    // '3xl'
    // '4xl'
    // '5xl'
    // '6xl'
    // '7xl'
    return '6xl';
  }

  public function add()
  {
  }

  public function updatedselectMalformacion($malformacione)
  {
    $this->nombreMalformacion = Malformacione::where('mal_formaciones.formacione_id',$malformacione)
    ->JOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    ->select('nombreMF.name as name','mal_formaciones.id_nombremalformacion as id')
    ->get();
  }
  
  public function mount()
  {
    $this->listMalformacion = formaciones::all();
    $this->nombreMalformacion = nombremalformacion::all()->whereNotIn('name','Ninguna');

  }
    public function render()
    {
        return view('livewire.alfonzo');
    }
}
