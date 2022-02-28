<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Frecuencia;

class ViciosComponent extends Component
{
  use WithPagination;

  public  $perPage = '4', $name = '', $confirming;

  protected $rules = [
    'name' => 'required|max:255|unique:drogas'
  ];

  public function render()
  {
    return view('livewire.vicios-component', [
      'vicios' => Frecuencia::select('name', 'id')
        ->where('name', 'like', '%' . $this->name . '%')
        ->paginate($this->perPage),
    ]);
  }

  public function destroy($id)
  {
    Frecuencia::destroy($id);
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
    Frecuencia::create([
      'name' => $this->name,
    ]);
    $this->name = '';
    session()->flash('message', 'Agregado con Exito');
  }
}
