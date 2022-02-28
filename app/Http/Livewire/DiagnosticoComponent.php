<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\malFormacione;
use App\Models\Estatu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\sustanciasToxica;
use Livewire\WithFileUploads;

class DiagnosticoComponent extends Component
{
  use WithFileUploads;

  use LivewireAlert;

  public $malformacionesC,$estatusC,$malformacion,$status,$plantilla;


protected $rules = [

  'status' => ['required'],
  'malformacion' => ['required'],
  'plantilla' => ['required','mimes:pdf,doc,docx,png,jpge,jpg,txt|max:4096'],
];

protected $messages = [
   'malformacion.required' => 'Campo mal formación requerido.',
   'status.required' => 'Campo mal formación requerido.',
  'plantilla.required' => 'Campo plantilla requerido.',
];

public function updated($propertyName)
{
  $this->validateOnly($propertyName);
}
  public function mount($selectEstado = null)
  {
    $this->malformacionesC = malFormacione::all();
    $this->estatusC = Estatu::all();
    $this->toxicos = sustanciasToxica::all();

  }
  public function render()
  {
    return view('livewire.diagnostico-component');
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
