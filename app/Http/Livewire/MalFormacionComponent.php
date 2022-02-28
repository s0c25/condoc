<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\malFormacione;
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
      'malFormacions' => malFormacione::select('name', 'id')
        ->where('name', 'like', '%' . $this->name . '%')
        ->paginate($this->perPage),
    ]);
  }

  public function destroy($id)
  {
    malFormacione::destroy($id);
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
    malFormacione::create([
      'name' => $this->name,
    ]);
    $this->name = '';
    session()->flash('message', 'Agregado con Exito');

    $this->alert('success', 'Hello!', [
      'position' => 'center',
      'timer' => 3000,
      'toast' => true,
     ]);
  }
}
