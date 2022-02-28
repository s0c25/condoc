<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Pacientes extends Component
{
  use WithFileUploads;

  use LivewireAlert;

  public $file,$name, $lastname, $ocupacion, $phone, $edad,
    $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga,
    $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol,
    $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas,
    $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto,
    $situacion, $presentacion, $posicion, $malformacion, $plantilla, $direccion, $edocivil;

  protected $rules = [
    
    'plantilla' => ['required','mimes:pdf,doc,docx,png,jpge,jpg,txt|max:1024'],
  ];

  protected $messages = [
   
    'plantilla.required' => 'Campo plantilla requerido.',
    'plantilla.mimes' => 'Formato invalido, solo aceptamos pdf,doc,docx,png,jpge,jpg',

  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }
  public function render()
  {
    return view('livewire.pacientes');
  }
  public function add()
  {
  }
  
}
