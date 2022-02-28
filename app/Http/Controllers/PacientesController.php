<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Embarazo;
use App\Models\Ginecoobstetrico;
use App\Models\Biopsicosociales;
use App\Models\Paciente;
use App\Models\malFormacione;
use App\Models\Consulta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\sustancias_toxicas_has_paciente;
use App\Models\otros_sustancias_has_paciente;
use App\Models\mal_formaciones_has_paciente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PacientesController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $malformaciones = malFormacione::all();

    return view('pacientes');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $rules = [
      'name' => ['required'],
      'lastname' => ['required'],
      'edoCivil' => ['required'],
      'ocupacion' => ['required'],
      'cedula' => ['required'],
      'edad' => ['required'],
      'phone' => ['required'],
      'direccion' => ['required'],
      'id_estado' => ['required'],
      'id_ciudad' => ['required'],
      'enfemedadC' => ['required'],
      'alcohol' => ['required'],
      'droga' => ['required'],
      'tabaco' => ['required'],
      'observacion' => ['required'],
      'aninfeccion' => ['required'],
      'gestas' => ['required'],
      'paras' => ['required'],
      'abortos' => ['required'],
      'cesareas' => ['required'],
      'ee' => ['required'],
      'etg' => ['required'],
      'fum' => ['required'],
      'gestacion' => ['required'],
      'gestacionpc' => ['required'],
      'embarazo' => ['required'],
      'feto' => ['required'],
      'situacion' => ['required'],
      'presentacion' => ['required'],
      'posicion' => ['required'],
      'status' => ['required'],
      'plantilla'  => ['required'],

    ];

    $messages = [

      'name' => 'Dato requerido',
      'lastname' => 'Dato requerido',
      'edoCivil' => 'Dato requerido',
      'ocupacion' => 'Dato requerido',
      'cedula' => 'Dato requerido',
      'edad' => 'Dato requerido',
      'phone.required' => 'Dato requerido',
      'direccion.required' => 'Dato requerido',
      'id_estado.required' => 'Dato requerido',
      'id_ciudad.required' => 'Dato requerido',
      'enfemedadC.required' => 'Dato requerido',
      'alcohol.required' => 'Dato requerido',
      'droga.required' => 'Dato requerido',
      'tabaco.required' => 'Dato requerido',
      'observacion.required' => 'Dato requerido',
      'aninfeccion.required' => 'Dato requerido',
      'gestas.required' => 'Dato requerido',
      'paras.required' => 'Dato requerido',
      'abortos.required' => 'Dato requerido',
      'cesareas.required' => 'Dato requerido',
      'ee.required' => 'Dato requerido',
      'etg.required' => 'Dato requerido',
      'fum.required' => 'Dato requerido',
      'gestacion.required' => 'Dato requerido',
      'gestacionpc.required' => 'Dato requerido',
      'embarazo.required' => 'Dato requerido',
      'feto.required' => 'Dato requerido',
      'situacion.required' => 'Dato requerido',
      'presentacion.required' => 'Dato requerido',
      'posicion.required' => 'Dato requerido',
      'status.required' => 'Dato requerido',
      'plantilla.required'  => 'Dato requerido',
    ];

    $this->validate($request, $rules, $messages);

      $array1 = $request->droga;
      
      $drogas = explode(",", $array1);
     

      $idBiopsicosociales = Biopsicosociales::create([
        'tabaco' => $request['tabaco'],
        'alcohol' => $request['alcohol'],
        'observacion' => $request['observacion'],
      ]);

      $idGinecoobstetrico = Ginecoobstetrico::create([
        'anteceInfeccion' => $request['aninfeccion'],
        'gestas' => $request['gestas'],
        'paras' => $request['paras'],
        'abortos' => $request['abortos'],
        'cesareas' => $request['cesareas'],
        'ee' => $request['ee'],
        'etg' => $request['etg'],
        'fum' => $request['fum'],
        'gestacional' => $request['gestacion'],
        'gestacionalPrimera' => $request['gestacionpc'],
      ]);

      $idPacienteEmbarazo =  Embarazo::create([
        'embarazo' => $request['embarazo'],
        'feto' => $request['feto'],
        'situacion' => $request['situacion'],
        'presentacion' => $request['presentacion'],
        'posicion' => $request['posicion'],
      ]);

      if ($request->file('plantilla')) {
        $filee = $request->file('plantilla');
        $nombre = time() . $filee->getClientOriginalName();
        // $filee->move(public_path() . '/plantilla/', $nombre);
    
        Storage::disk('local')->put($nombre, 'plantilla');
      }
      $idPacientes = Paciente::create([
        'name' => $request['name'],
        'lastname' => $request['lastname'],
        'cedula' => $request['cedula'],
        'lastname' => $request['lastname'],
        'ocupacion' => $request['ocupacion'],

        'edoCivil' => $request['edoCivil'],
        'direccion' => $request['direccion'],

        'id_ciudad' => $request['id_ciudad'],
        'id_estado' => $request['id_estado'],
        'phone' => $request['phone'],
        'edad' => $request['edad'],
        'id_enfermedadCronica' => $request['enfemedadC'],
        'id_ginecoobstetrico' => $idGinecoobstetrico->id,
        'id_embarazo' => $idPacienteEmbarazo->id,
        'id_biopsicosociales' => $idBiopsicosociales->id,
        'plantilla' => $nombre,

      ]);

      $idPacientes->drogas()->sync($drogas);


      // $idPacientes->sustanciasToxica()->sync($toxico);

      $toxicos = $request->sustanciastoxicas;

      $cuentaT = count($toxicos);

      for ($i = 0; $i < $cuentaT; $i++) {

        sustancias_toxicas_has_paciente::create([
          'paciente_id' => $idPacientes->id,
          'sustancias_toxica_id' => $toxicos[$i],
        ]);
      }


      // $idPacientes->malFormacione()->sync($malformacion);


      $malformacions = $request->malformacion;


      $cuentaMF = count($malformacions);

      for ($i = 0; $i < $cuentaMF; $i++) {

        mal_formaciones_has_paciente::create([
          'paciente_id' => $idPacientes->id,
          'mal_formacione_id' => $malformacions[$i],
        ]);
      }


      // $idPacientes->otrostoxicos()->sync($otrosToxico);

      $otrosToxicos = $request->otro;

      $cuentaOT = count($otrosToxicos);

      for ($i = 0; $i < $cuentaOT; $i++) {

        otros_sustancias_has_paciente::create([
          'paciente_id' => $idPacientes->id,
          'otros_toxicos_id' => $otrosToxicos[$i],
        ]);
      }


      return redirect()->route('gracias');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $query = Consulta::select('P.name as name', 'P.lastname as lastname', 'P.created_at as pvisita', 'consultas.end_at as uvisita', 'S.name as status', 'consultas.id_paciente as id', 'P.phone as phone', 'P.ocupacion as ocupacion', 'E.name as estado', 'C.name as ciudad', 'P.cedula')
      ->LEFTJOIN('pacientes AS P', 'consultas.id_paciente', '=', 'P.id')
      ->LEFTJOIN('estatus AS S', 'consultas.id_estatu', '=', 'S.id')
      ->LEFTJOIN('estados AS E', 'P.id_estado', '=', 'E.id')
      ->LEFTJOIN('ciudades AS C', 'P.id_ciudad', '=', 'C.id')
      ->where('P.id', $id)
      ->get();
    // dd($query);
    return view('showpaciente', compact('query'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
