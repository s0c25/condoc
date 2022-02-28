<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Estado;
use App\Models\Ciudade;

class ValidPacienteForm extends Component
{

  use LivewireAlert;

  public $cronica;
  public $estados;
  public $ciudades;
  public $selectEstado;
  public $estado_civil;

  public $name, $lastname, $ocupacion, $phone, $edad,
    $cedula, $id_estado, $id_ciudad, $enfemedadC, $droga,
    $sustanciastoxicas, $otro, $observacion, $tabaco, $alcohol,
    $status, $aninfeccion, $gestas, $paras, $abortos, $cesareas,
    $ee, $etg, $fum, $gestacion, $gestacionpc, $embarazo, $feto,
    $situacion, $presentacion, $posicion, $malformacion, $plantilla, $direccion, $edoCivil;

  protected $rules = [
    'selectEstado' => ['required', 'numeric'],
    'name' => ['required', 'string', 'max:30', 'min:2'],
    'lastname' => ['required', 'string', 'max:20', 'min:2'],
    'phone' => ['required', 'numeric', 'digits_between:6,30'],
    'ocupacion' => ['required', 'string', 'max:255', 'min:2'],
    'cedula' => ['required', 'string', 'digits_between:4,100'],
    'id_ciudad' => ['required', 'numeric'],
    'id_estado' => ['required', 'numeric'],
    'edoCivil' => ['required', 'string'],
    'droga' => ['required'],
    'sustanciastoxicas' => ['required'],
    'otro' => ['required'],
    'edad' => ['required', 'numeric', 'digits_between:1,2'],
    'direccion' => ['required', 'string', 'max:255', 'min:2'],

  ];

  protected $messages = [
    'name.required' => 'El nombre es requerido.',
    'name.min' => 'Escribe nombre completo',
    'name.max' => 'Escribe nombre corto o abreviado.',
    'name.string' => 'El formato del nombre no es valido.',
    'lastname.min' => 'Escribe apellido completo',
    'lastname.max' => 'Escribe apellido corto o abreviado.',
    'lastname.required' => 'El apellido es requerido.',
    'lastname.string' => 'El formato del apellido no es valido.',
    'phone.required' => 'El teléfono es requerido.',
    'phone.numeric' => 'El formato del teléfono no es valido.',
    'phone.digits_between' => 'Ingresa numero telefonico valido.',
    'ocupacion.required' => 'La ocupación es requerido.',
    'ocupacion.string' => 'El formato de la ocupación no es valido.',
    'ocupacion.min' => 'Escribe ocupacion completa.',
    'ocupacion.max' => 'Escribe ocupacion corto o abreviado.',

    'cedula.digits_between' => 'La cedula debe tener de 4 a 20 numeros.',
    'cedula.required' => 'La cedula es requerido.',
    'cedula.string' => 'El formato de la ocupación no es valido.',
    'id_ciudad.required' => 'Campo ciudad es requerido.',
    'id_estado.required' => 'Campo estado es requerido.',
    'selectEstado.required' => 'Campo estado es requerido.',
    'id_ciudad.numeric' => 'Campo ciudad es requerido.',
    'id_estado.numeric' => 'Campo estado es requerido.',
    'selectEstado.numeric' => 'Campo estado es requerido.',
    'otro.required' => 'Campo otro es requerido.',
    'edoCivil.required' => 'Campo observación es requerido.',
    'edoCivil.string' => 'Formato invalido, solo se admite texto.',
    'edad.required' => 'Campo edad requerido.',
    'edad.numeric' => 'Solo se acepta numeros.',
    'edad.digits_between' => 'Cantidad de caracteres sobrepasado.',
    'direccion.min' => 'Escribe direccion completo',
    'direccion.max' => 'Escribe direccion corto o abreviado.',
    'direccion.required' => 'La direccion es requerido.',
    'direccion.string' => 'El formato de la direccion no es valido.',
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function check()
  {
    $validatedData = $this->validate();
    dd($validatedData);
    if ($validatedData == true or $validatedData != '[]') {
      $this->alert('info', 'Verificación de Datos', [
        'position' => 'center',
        'timer' => 3000,
        'toast' => true,
        'text' => 'Datos Validos',
      ]);
    }else{
      $this->alert('info', 'Verificación de Datos', [
        'position' => 'center',
        'timer' => 3000,
        'toast' => true,
        'text' => 'Datos no Validos',
      ]);

    }

  }

  public function mount($selectEstado = null)
  {
  
    $this->estado_civil = ['Soltera','Casada','Divorsiada','Viuda'];

  }

  public function updatedselectEstado($estado)
  {
    $this->ciudades = Ciudade::where('id_estado', $estado)->get();
  }

  // public function saveContact()
  // {
  //   // dd($this->id_estado);

  //   $validatedData = $this->validate();
  //   Contact::create($validatedData);
  // }

  public function render()
  {

    return view('livewire.valid-paciente-form');
  }
}
