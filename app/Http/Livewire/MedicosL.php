<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medico;

class MedicosL extends Component
{
    public $search = '';
    public $empleado_codigo = '';
    public $funcion = '';
    public $experiencia = '';
    public $id_med;
    public $accion = 'store';
    protected $rules = [
        'empleado_codigo' => 'required',
        'funcion' => 'required',
        'experiencia' => 'required',

    ];

    protected $messages = [
        'empleado_codigo.required' => "Ingrese codigo obligatorio",
        'funcion.required' => "Ingrese una función valida",
        'experiencia.required' => "Ingrese una dato de su experiencia",

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
       public function render()
    {
        $medico = Medico::where('funcion','like','%'. $this->search . '%')->get();;
        return view('livewire.medicos-l',compact('medico'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Medico::create([
            'empleado_codigo' => $this->empleado_codigo,
            'funcion' => $this->funcion,
            'experiencia' => $this->experiencia,


        ]);

        $this->reset(['empleado_codigo', 'funcion','experiencia','accion']);
    }

    //Edit Corresponsales
    public function edit(Medico $corr)
    {
        $this->accion = "update";
        $this->empleado_codigo = $corr->empleado_codigo;
        $this->funcion = $corr->funcion;
        $this->experiencia = $corr->experiencia;
        $this->id_med = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Medico::find($this->id_med);
        $corr->update([
            'empleado_codigo' => $this->empleado_codigo,
            'funcion' => $this->funcion,
            'experiencia' => $this->experiencia,


        ]);
        $this->reset(['empleado_codigo', 'funcion','experiencia','accion']);


    }
    function
default() {
    $this->reset(['empleado_codigo', 'funcion','experiencia','accion']);

    }
    public function destroy(Medico $corr)
    {
        $corr->delete();
    }
}
