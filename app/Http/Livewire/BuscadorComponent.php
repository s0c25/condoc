<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Paciente;
use App\Models\Estatu;
use App\Models\mal_formaciones_has_paciente;
use App\Models\Consulta;
use App\Models\malFormacione;
use App\Models\sustancias_toxicas_has_paciente;
use App\Models\sustanciasToxica;


class BuscadorComponent extends Component
{

  use WithPagination;

  protected $queryString = [
    'paciente' => ['execept' => ''],
    'perPage' => ['execept' => '5']
  ];
  public  $perPage = '', $paciente = '', $cantMalformacion, $malformaciones, $malformacion;


  public function render()
  {

    return view('livewire.buscador-component', [
      'pacientes' => Paciente::select(
        'pacientes.name as name',
        'pacientes.lastname as lastname',
        'pacientes.edad as edad',
        'pacientes.id as id',
        'pacientes.created_at as created_at'

      )
        ->where('pacientes.cedula', 'like', '%' . $this->paciente . '%')
        // ->ORwhere('MFF.mal_formacione_id', '=', $this->malformaciones)
        ->paginate($this->perPage)
    ]);


  }

  public function mount()
  {
    $this->malformacion = malFormacione::all();
  }

  public function show($id)
  {
    return redirect()->route('verPaciente', [$id]);
  }
}
