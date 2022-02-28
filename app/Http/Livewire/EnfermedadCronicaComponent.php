<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\enfermedadCronica;

class EnfermedadCronicaComponent extends Component
{

  use WithPagination;

  public  $perPage = '4', $name = '', $confirming;

  protected $rules = [
    'name' => 'required|max:255|unique:drogas'
  ];

  public function render()
  {
    return view('livewire.enfermedad-cronica-component', [
      'enfermedadCronicas' => enfermedadCronica::select('name', 'id')
        ->where('name', 'like', '%' . $this->name . '%')
        ->paginate($this->perPage),
    ]);
  }

  public function destroy($id)
  {
    enfermedadCronica::destroy($id);
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
    enfermedadCronica::create([
      'name' => $this->name,
    ]);
    $this->name = '';
    session()->flash('message', 'Agregado con Exito');
  }
}
