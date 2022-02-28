<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estado;
use App\Models\Ciudade;

class EditDownComponent extends Component
{
    public $ffff;
    public $estados;
    public $ciud;
    public $est;
    public $ciudades;
    public $selectEstado = null;

    public function mount( $ffff)
    {
        $this->estados = Estado::all();
        $this->ciudades = collect();

        foreach($ffff as $ihas){
            $this-> ciud = $ihas->ciudad;
            $this-> est = $ihas->estado;

        };

    }

    public function render()
    {
        return view('livewire.edit-down-component');
    }

    public function updatedselectEstado($estado)
    {
        $this->ciudades = Ciudade::where('id_estado', $estado)->get();
    }

    // public function updatedselectProvincia($provincia)
    // {
    //     if (!is_null($provincia)) {
    //         $this->distritos = Distrito::where('provincia_id', $provincia)->get();
    //     }
    // } 
}
