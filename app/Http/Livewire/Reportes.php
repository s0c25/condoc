<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;

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

class Reportes extends ModalComponent
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
    
    dd($hola2);
  }

  public function updatedselectMalformacion($malformacione)
  {
    $this->nombreMalformacion = Malformacione::where('mal_formaciones.formacione_id',$malformacione)
    ->JOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    ->select('nombreMF.name as name','mal_formaciones.id_nombremalformacion as id')
    ->get();
  }
  public function render()
  {
    
    return view('livewire.reportes');
  }
  public function mount()
  {
    $this->listMalformacion = formaciones::all();
    $this->nombreMalformacion = nombremalformacion::all()->whereNotIn('name','Ninguna');

  }
  public function pdf()
  {

    $query=
    malformacion_paciente::whereIn
    ('malformacion_pacientes.nombremalformacion_id', $this->mff)
          ->LEFTJOIN('mal_formaciones AS mf', 
          'malformacion_pacientes.nombremalformacion_id', '=', 'mf.id_nombremalformacion')
          ->LEFTJOIN('formaciones AS f', 
          'f.id', '=', 'mf.formacione_id')
          ->LEFTJOIN('nombremalformacions AS nm', 
          'nm.id', '=', 'mf.id_nombremalformacion')
          ->select('f.name as formacionName','nm.name as nombreMal','mf.descripcion as formo')
          ->get();

          $enfermedades = $query->countBy(function ($item) {
            return $item['formo'];
          });


          

          $malfomarcion = $query->countBy(function ($item) {
              return $item['nombreMal'];
            });

            return view('livewire.ttfabiola', compact('enfermedades','malfomarcion'));





           
  }
}
