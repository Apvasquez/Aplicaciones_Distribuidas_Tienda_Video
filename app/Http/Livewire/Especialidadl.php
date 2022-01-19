<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Especialidades;

class Especialidadl extends Component
{
    public $search = '';
    public $nombre = '';
    public $descripcion = '';
    public $id_esp;
    public $accion = 'store';
    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',

    ];

    protected $messages = [
        'nombre.required' => "Ingrese nombre Obligatorio",
        'descripcion.required' => "Ingrese una espcialidad valida",

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
       public function render()
    {
        $especialidad = Especialidades::where('nombre','like','%'. $this->search . '%')->get();;
        return view('livewire.especialidadl',compact('especialidad'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Especialidades::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,

        ]);

        $this->reset(['nombre', 'descripcion','accion']);
    }

    //Edit Corresponsales
    public function edit(Especialidades $corr)
    {
        $this->accion = "update";
        $this->nombre = $corr->nombre;
        $this->descripcion = $corr->descripcion;
        $this->id_esp = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Especialidades::find($this->id_esp);
        $corr->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,


        ]);
        $this->reset(['nombre', 'descripcion','accion']);


    }
    function
default() {
    $this->reset(['nombre', 'descripcion','accion']);

    }
    public function destroy(Especialidades $corr)
    {
        $corr->delete();
    }
}
