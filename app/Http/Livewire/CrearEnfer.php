<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\formaciones;
use App\Models\nombremalformacion;
use App\Models\malFormacione;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CrearEnfer extends ModalComponent
{
  use LivewireAlert;

  public $enfermedadMalformacion,$descripcionMalFormacion,$nombreMalformacion,$mfm,$idnombre,$formacion,$idformacion;

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

    public function render()
    {
        return view('livewire.crear-enfer');
    }

    public function mount()
    {
      $this->formacion=formaciones::all();
    }
    public function add()
    {
      $idnombresss=nombremalformacion::create([
        'name'=>$this->enfermedadMalformacion,
      ]);
      formaciones::where('id',$this->idformacion)
      ->update([
        'descripcion'=>$this->descripcionMalFormacion,
      ]);

      malFormacione::create([
        'formacione_id'=>$this->idformacion,
        'id_nombremalformacion'=>$idnombresss->id,
        'descripcion'=>$this->descripcionMalFormacion,
      ]);

      $this->enfermedadMalformacion = '';
      $this->descripcionMalFormacion = '';


      $this->alert('success', 'Agregado con Exito!', [
        'position' => 'center',
        'timer' => 3000,
        'toast' => true,
       ]);
    }
}
