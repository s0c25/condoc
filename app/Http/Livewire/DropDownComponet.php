<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estado;
use App\Models\Ciudade;
use App\Models\enfermedadCronica;


class DropDownComponet extends Component
{

  public $cronica;
  public $estados;
  public $ciudades;
  public $selectEstado;
  public $name, $lastname, $ocupacion, $phone, $edad,
  $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga,
   $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol, 
   $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas, 
   $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto, 
   $situacion, $presentacion, $posicion, $malformacion, $plantilla,$direccion,$edocivil;

protected $rules = [
 
  'id_ciudad' => ['required', 'numeric'],
  'id_estado' => ['required', 'numeric'],
  'selectEstado' => ['required', 'numeric'],

  
];

protected $messages = [
  
  'id_ciudad.required' => 'Campo ciudad es requerido.',
  'id_estado.required' => 'Campo estado es requerido.',
  'selectEstado.required' => 'Campo estado es requerido.',

  'id_ciudad.numeric' => 'Campo ciudad es requerido.',
  'id_estado.numeric' => 'Campo estado es requerido.',
  'selectEstado.numeric' => 'Campo estado es requerido.',

  
];

public function updated($propertyName)
{
  $this->validateOnly($propertyName);
}

  public function mount($selectEstado = null)
  {
    $this->estados = Estado::all();
    $this->ciudades = collect();
    $this->cronica = enfermedadCronica::all();
  }

  public function updatedselectEstado($estado)
  {
    $this->ciudades = Ciudade::where('id_estado', $estado)->get();
  }

  public function render()
  {
    return view('livewire.drop-down-componet');
  }



  // public function updatedselectProvincia($provincia)
  // {
  //     if (!is_null($provincia)) {
  //         $this->distritos = Distrito::where('provincia_id', $provincia)->get();
  //     }
  // } 
}
