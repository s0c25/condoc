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

    $cantidadMalformacioness = Paciente::where('pacientes.cedula', $this->paciente)
      ->join('mal_formaciones_has_pacientes as MFF', 'pacientes.id', '=', 'MFF.paciente_id')
      ->join('mal_formaciones as MF', 'MF.id', '=', 'MFF.id')
      ->select('MF.name')
      ->get();

        $this->cantMalformacion = $cantidadMalformacioness->count();



    return view('livewire.buscador-component', [
      'pacientes' => Paciente::select(
        'pacientes.name as name',
        'pacientes.lastname as lastname',
        'pacientes.edad as edad',
        'pacientes.id as id'
      )
        ->join('mal_formaciones_has_pacientes as MFF', 'pacientes.id', '=', 'MFF.paciente_id')
        ->where('pacientes.cedula', 'like', '%' . $this->paciente . '%')
        ->where('MFF.mal_formacione_id', '=', $this->malformaciones)
        ->paginate($this->perPage)
    ]);

    // $hola=Paciente::select(
    //   'pacientes.name as name', 
    //   'pacientes.lastname as lastname', 
    //   'pacientes.edad as edad', 
    //   'mfp.id as id'
    //   )
    //     ->LEFTJOIN('mal_formaciones_has_pacientes AS mfp', 'pacientes.id', '=', 'mfp.mal_formacione_id')
    //     ->LEFTJOIN('mal_formaciones AS mf', 'mf.id', '=', 'mfp.mal_formacione_id')
    //     ->where('paciente_id','mfp.mal_formacione_id')
    //     ->get();

    //   $hola1=mal_formaciones_has_paciente::where('paciente_id','1')->select('mal_formacione_id')->get();

    //   dd($hola);
    // ->where('cedula', 'like', '%'.$this->paciente.'%')
    // ->paginate($this->perPage)



    // return view('livewire.buscador-component', [
    //     'pacientes' => Consulta::select('P.name as name', 'P.lastname as lastname', 'P.created_at as pvisita', 'consultas.end_at as uvisita', 'E.name as status', 'consultas.id_paciente as id')
    //     ->LEFTJOIN('pacientes AS P', 'consultas.id_paciente', '=', 'P.id')
    //     ->LEFTJOIN('estatus AS E', 'consultas.id_estatu', '=', 'E.id')
    //     ->where('cedula', 'like', '%'.$this->paciente.'%')
    //     ->paginate($this->perPage),
    // ]);

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
