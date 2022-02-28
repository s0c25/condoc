<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
  public $name, $lastname, $ocupacion, $phone, $edad,
    $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga, $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol, $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas, $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto, $situacion, $presentacion, $posicion, $malformacion, $plantilla;

  protected $rules = [
    'name' => ['required', 'string', 'max:255', 'min:2'],
    'lastname' => ['required', 'string', 'max:255', 'min:2'],
    'phone' => ['required', 'numeric', 'digits_between:6,30'],
    'ocupacion' => ['required', 'string', 'max:255', 'min:2'],
    'cedula' => ['required', 'numeric', 'digits_between:4,20'],
    'id_ciudad' => ['required', 'numeric'],
    'id_estado' => ['required', 'numeric'],
    'enfemedadC' => ['required', 'numeric'],
    'droga' => ['required'],
    'sustanciastoxicas' => ['required'],
    'otro' => ['required'],
    'observacion' => ['required', 'string', 'max:255', 'min:2'],
    'tabaco' => ['required', 'string', 'max:255', 'min:1'],
    'alcohol' => ['required', 'string', 'max:255', 'min:1'],
    'edad' => ['required', 'numeric', 'digits_between:1,30'],
    'status' => ['required', 'string', 'max:255', 'min:1'],
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
    'malformacion' => ['required'],
    'plantilla' => ['required'],
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  // public function saveContact()
  // {
  //   // dd($this->id_estado);

  //   $validatedData = $this->validate();
  //   Contact::create($validatedData);
  // }

  public function render()
  {
    return view('livewire.contact-form');
  }
}
