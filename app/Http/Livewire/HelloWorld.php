<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Paciente;
use App\Models\Estado;
use App\Models\Ciudade;
use App\Models\Biopsicosociales;
use App\Models\sustanciasToxica;
use App\Models\sustancias_toxicas_has_paciente;
use App\Models\otros_sustancias_has_paciente;
use App\Models\enfermedadCronica;
use App\Models\Droga;
use App\Models\drogas_has_paciente;
use App\Models\Ginecoobstetrico;
use App\Models\Embarazo;
use App\Models\enfermedad_cronica_paciente;
use App\Models\mal_formaciones_has_paciente;
use App\Models\Estatu;
use App\Models\Frecuencia;
use App\Models\malformacion_paciente;
use Illuminate\Support\Facades\Storage;

class HelloWorld extends ModalComponent
{
  public $paciente_id,$name,$lastname,$edoCivil,$ocupacion,$cedula,$edad,$phone,$direccion,$ciudadEstadp,
  $enfemedadC,$alcohol,$drogas,$tabaco,$toxicos,$sustanciastoxicas,$otro,$observacion
  ,$aninfeccion,$gestas,$paras,$abortos,$cesareas,$ee,$etg,$fum,$gestacion,$gestacionpc,$embarazo,$feto,$situacion
  ,$presentacion,$posicion,$status,$malformacion;


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
    $pacientes = Paciente::find($this->paciente_id);
    $this->name=$pacientes->name;
    $this->lastname=$pacientes->lastname;
    $this->edoCivil=$pacientes->edoCivil;
    $this->ocupacion=$pacientes->ocupacion;
    $this->cedula=$pacientes->cedula;
    $this->edad=$pacientes->edad;
    $this->phone=$pacientes->phone;
    $this->direccion=$pacientes->direccion;
  
    $estado = Estado::find($pacientes->id_estado);
    $ciudad = Ciudade::find($pacientes->id_ciudad);

    $this->ciudadEstadp = $estado->name . ', ' .$ciudad->name;

    $frecuencias=Biopsicosociales::find($pacientes->id_biopsicosociales);
    $tabaquito=Frecuencia::find($frecuencias->tabaco);
    $alcohol=Frecuencia::find($frecuencias->alcohol);
    $this->tabaco=$tabaquito->name;
    $this->alcohol=$alcohol->name;
    $this->observacion=$frecuencias->observacion;

    $enfermedadC=enfermedad_cronica_paciente::where('paciente_id',$this->paciente_id)
    ->join('enfermedad_cronicas as Ec','Ec.id','=','enfermedad_cronica_pacientes.enfermedadCronica_id')
    ->get('Ec.name');

    $sustanciasT=sustancias_toxicas_has_paciente::where('paciente_id',$this->paciente_id)
    ->join('sustancias_toxicas as St','St.id','=','sustancias_toxicas_has_pacientes.sustancias_toxica_id')
    ->get('St.name');

    $this->toxicos=$sustanciasT;

    $otross=otros_sustancias_has_paciente::where('paciente_id',$this->paciente_id)
    ->join('farmacos as ff','ff.id','=','otros_sustancias_has_pacientes.farmaco_id')
    ->get('ff.name');

    $this->otro=$otross;

    $drogass=drogas_has_paciente::where('paciente_id',$this->paciente_id)
    ->join('drogas as dd','dd.id','=','drogas_has_pacientes.droga_id')
    ->get('dd.name');

    $this->drogas=$drogass;

    $gineco = Ginecoobstetrico::find($pacientes->id_ginecoobstetrico);
    
    $this->aninfeccion=$gineco->anteceInfeccion;
    $this->gestas=$gineco->gestas;
    $this->paras=$gineco->paras;
    $this->abortos=$gineco->abortos;
    $this->cesareas=$gineco->cesareas;
    $this->ee=$gineco->ee;
    $this->etg=$gineco->etg;
    $this->fum=$gineco->fum;
    $this->gestacion=$gineco->gestacional;
    $this->gestacionpc=$gineco->gestacionalPrimera;

    $emabara = Embarazo::find($pacientes->id_embarazo);

    $this->embarazo=$emabara->embarazo;
    $this->feto=$emabara->feto;
    $this->situacion=$emabara->situacion;
    $this->presentacion=$emabara->presentacion;
    $this->posicion=$emabara->posicion;

    $malforma=malformacion_paciente::where('paciente_id',$this->paciente_id)
    ->join('nombremalformacions as nmf','nmf.id','=','malformacion_pacientes.nombremalformacion_id')
    ->get('nmf.name');

    $this->malformacion=$malforma;

    $emabara = Estatu::find($pacientes->id_embarazo);


    return view('livewire.hello-world');
  }

  public function export()
    {
      $pacientes = Paciente::find($this->paciente_id);

        return Storage::disk('local')->download($pacientes->plantilla);
    }
}
