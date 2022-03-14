<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\formaciones;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class MalFormacionComponent extends Component
{  
  use LivewireAlert;


  use WithPagination;

  public  $perPage = '4', $name = '', $confirming;

  protected $rules = [
    'name' => 'required|max:255|unique:drogas'
  ];

  public function render()
  {
    return view('livewire.mal-formacion-component', [
      'malFormacions' => formaciones::select('name', 'id')
        ->where('name', 'like', '%' . $this->name . '%')
        ->paginate($this->perPage),
    ]);
  }

  public function destroy($id)
  {
    formaciones::destroy($id);
    $this->name = '';
    session()->flash('message', 'Eliminado con Exito');
  }

  public function confirmDelete($id)
  {
    $this->confirming = $id;
  }

  public function add()
  {
    $this->validate();
    formaciones::create([
      'name' => $this->name,
      'descripcion'=> $this->name,
    ]);
    $this->name = '';

    $this->alert('success', 'Agregado con Exito!', [
      'position' => 'center',
      'timer' => 3000,
      'toast' => true,
     ]);
  }
}
