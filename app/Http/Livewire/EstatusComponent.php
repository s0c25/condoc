<?php

namespace App\Http\Livewire;

use App\Models\Estatu;
use Livewire\Component;
use App\Models\enfermedadCronica;
use App\Models\Frecuencia;
use App\Models\Droga;
use App\Models\farmacos;
use App\Models\sustanciasToxica;
use App\Models\malFormacione;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class EstatusComponent extends Component
{
  use LivewireAlert;

  public $cronica, $frecuencias, $drogas, $toxicos, $malformaciones;
  public $name, $lastname, $ocupacion, $phone, $edad,
  $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga,
   $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol, 
   $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas, 
   $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto, 
   $situacion, $presentacion,$farmacos, $posicion, $malformacion, $plantilla,$direccion,$edocivil;

protected $rules = [
  'enfemedadC' => ['required'],
  'droga' => ['required'],
  'sustanciastoxicas' => ['required'],
  'otro' => ['required'],
  'observacion' => ['required', 'string', 'max:255', 'min:2'],
  'tabaco' => ['required', 'string', 'max:255', 'min:1'],
  'alcohol' => ['required', 'string', 'max:255', 'min:1'],
  'edad' => ['required', 'numeric', 'digits_between:1,30'],
  'status' => ['required', 'string', 'max:255', 'min:1'],
  
];

protected $messages = [
  'enfemedadC.required' => 'Campo enfermedad cronica es requerido.',
  'droga.required' => 'Campo droga es requerido.',
  'sustanciastoxicas.required' => 'Campo sustancia toxica es requerido.',
  'otro.required' => 'Campo otro es requerido.',
  'observacion.required' => 'Campo observación es requerido.',
  'observacion.string' => 'Formato invalido, solo se admite texto.',
  'observacion.max' => 'Maximo 255 caracteres.',
  'observacion.min' => 'Minimo caracteres 2.',
  'tabaco.required' => 'Campo tabaco requerido.',
  'alcohol.required' => 'Campo alcohol requerido.',
  'edad.required' => 'Campo edad requerido.',
  'edad.numeric' => 'Solo se acepta numeros.',
  'edad.digits_between' => 'Cantidad de caracteres sobrepasado.',
  'status.required' => 'Campo estatus requerido.',
  'status.string' => 'Formato invalido, solo se admite texto.',
 
];

public function check()
  {
    $this->alert('info', 'Verificación de Datos', [
      'position' => 'center',
      'timer' => 3000,
      'toast' => true,
      'text' => 'Datos Validos',
     ]);
    $this->validate();
    
  }

public function updated($propertyName)
{
  $this->validateOnly($propertyName);
}

  public function mount($selectEstado = null)
  {
    $this->status = Estatu::all();
    $this->frecuencias = Frecuencia::all();
    $this->drogas = Droga::all();
    $this->toxicos = sustanciasToxica::all();
    $this->farmacos = farmacos::all();
    $this->cronica = enfermedadCronica::all();
  }

  public function render()
  {
    return view('livewire.estatus-component');
  }

}
