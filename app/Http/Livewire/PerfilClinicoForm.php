<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PerfilClinicoForm extends Component
{
  use LivewireAlert;

  public $name, $lastname, $ocupacion, $phone, $edad,
    $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga,
    $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol,
    $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas,
    $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto,
    $situacion, $presentacion, $posicion, $malformacion, $plantilla, $direccion, $edocivil;

  protected $rules = [
    'aninfeccion' => ['required', 'string', 'max:255', 'min:1'],
    'gestas' => ['required', 'string', 'max:255', 'min:1'],
    'paras' => ['required', 'string', 'max:255', 'min:1'],
    'abortos' => ['required', 'string', 'max:255', 'min:1'],
    'cesareas' => ['required', 'string', 'max:255', 'min:1'],
    'ee' => ['required', 'string', 'max:255', 'min:1'],
    'etg' => ['required', 'string', 'max:255', 'min:1'],
    'fum' => ['required', 'string', 'max:255', 'min:1'],
    'gestacion' => ['required', 'string', 'max:255', 'min:1'],
    'gestacionpc' => ['required', 'string', 'max:255', 'min:1'],
    'embarazo' => ['required', 'string', 'max:255', 'min:1'],
    'feto' => ['required', 'string', 'max:255', 'min:1'],
    'situacion' => ['required', 'string', 'max:255', 'min:1'],
    'presentacion' => ['required', 'string', 'max:255', 'min:1'],
    'posicion' => ['required', 'string', 'max:255', 'min:1'],

  ];

  protected $messages = [
    'aninfeccion.required' => 'Campo antecedentes de infecciones requerido.',
    'aninfeccion.string' => 'Formato invalido, solo se admite texto.',
    'gestas.required' => 'Campo gestas requerido.',
    'gestas.string' => 'Formato invalido, solo se admite texto.',
    'paras.required' => 'Campo paras requerido.',
    'paras.string' => 'Formato invalido, solo se admite texto.',
    'abortos.required' => 'Campo abortos requerido.',
    'abortos.string' => 'Formato invalido, solo se admite texto.',
    'cesareas.required' => 'Campo cesareas requerido.',
    'cesareas.string' => 'Formato invalido, solo se admite texto.',
    'ee.required' => 'Campo ee requerido.',
    'etg.required' => 'Campo etg requerido.',
    'fum.required' => 'Campo fum requerido.',
    'gestacion.required' => 'Campo edad gestacional requerido.',
    'gestacionpc.required' => 'Campo edad gestacional en primera consulta requerido.',
    'embarazo.required' => 'Campo embarazo requerido.',
    'feto.required' => 'Campo feto requerido.',
    'situacion.required' => 'Campo situación requerido.',
    'presentacion.required' => 'Campo presentación requerido.',
    'posicion.required' => 'Campo posición requerido.',
    'ee.string' => 'Formato invalido, solo se admite texto.',
    'etg.string' => 'Formato invalido, solo se admite texto.',
    'fum.string' => 'Formato invalido, solo se admite texto.',
    'gestacion.string' => 'Formato invalido, solo se admite texto.',
    'gestacionpc.string' => 'Formato invalido, solo se admite texto.',
    'embarazo.string' => 'Formato invalido, solo se admite texto.',
    'feto.string' => 'Formato invalido, solo se admite texto.',
    'situacion.string' => 'Formato invalido, solo se admite texto.',
    'presentacion.string' => 'Formato invalido, solo se admite texto.',
    'posicion.string' => 'Formato invalido, solo se admite texto.',

  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }
  public function render()
  {
    return view('livewire.perfil-clinico-form');
  }

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
}
