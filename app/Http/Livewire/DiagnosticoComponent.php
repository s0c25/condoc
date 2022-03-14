<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estatu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\malFormacione;
use App\Models\nombremalformacion;

use App\Models\sustanciasToxica;
use Livewire\WithFileUploads;

class DiagnosticoComponent extends Component
{
  use WithFileUploads;

  use LivewireAlert;

  public $malformacionesC, $estatusC, $malformacion, $status, $plantilla,
    $msnc, $mfc, $mfsr, $mfme, $mfg, $mfr, $mf1c, $mfs1r, $mfme1, $mf1g, $mfr1, $msn1c,$modeeee;


  protected $rules = [

    'status' => ['required'],
    'msnc' => ['required'],
    'mfg' => ['required'],
    'mfsr' => ['required'],
    'mfme' => ['required'],
    'mfg' => ['required'],
    'mfr' => ['required'],
    'plantilla' => ['required', 'mimes:pdf,doc,docx,png,jpge,jpg,txt|max:4096'],
  ];

  protected $messages = [
    'msnc.required' => 'Campo mal formación requerido.',
    'mfc.required' => 'Campo mal formación requerido.',
    'mfsr.required' => 'Campo mal formación requerido.',
    'mfme.required' => 'Campo mal formación requerido.',
    'mfg.required' => 'Campo mal formación requerido.',
    'mfr.required' => 'Campo mal formación requerido.',
    'status.required' => 'Campo mal formación requerido.',
    'plantilla.required' => 'Campo plantilla requerido.',
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }
  public function mount($selectEstado = null)
  {
    $this->estatusC = Estatu::all();
    $this->toxicos = sustanciasToxica::all();
    // $this->mf1g = malFormacione::where('mal_formaciones.name', 'MFG')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();

      $this->mf1g = nombremalformacion::all();

    // $this->msn1c = malFormacione::where('mal_formaciones.name', 'MSNC')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();

    // $this->mfr1 = malFormacione::where('mal_formaciones.name', 'MFR')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();

    // $this->mf1c = malFormacione::where('mal_formaciones.name', 'MFC')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();

    // $this->mfme1 = malFormacione::where('mal_formaciones.name', 'MFME')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();

    // $this->mfs1r = malFormacione::where('mal_formaciones.name', 'MFSR')
    //   ->LEFTJOIN('nombremalformacions AS nombreMF', 'mal_formaciones.id_nombremalformacion', '=', 'nombreMF.id')
    //   ->select('nombreMF.name as name', 'mal_formaciones.id as id')
    //   ->get();
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
