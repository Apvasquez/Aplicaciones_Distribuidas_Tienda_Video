<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Consulta;
use App\Models\Centro;

class ConsultaL extends Component
{
    public $search = '';
    public $centro_codigo = '';
    public $empleado_codigo = '';
    public $especialidad_codigo = '';
    public $fecha;
    public $hora;
    public $paciente;
    public $id_con;
    public $accion = 'store';
    protected $rules = [
        'centro_codigo' => 'required',
        'empleado_codigo' => 'required',
        'especialidad_codigo' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
        'paciente' => 'required',

    ];

    protected $messages = [
        'centro_codigo' => 'required',
        'empleado_codigo' => 'required',
        'especialidad_codigo' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
        'paciente' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
       public function render()
    {
        $consulta = Consulta::where('paciente','like','%'. $this->search . '%')->get();;

       $centros = Centro::all();
        return view('livewire.consulta-l',compact('consulta','centros'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Consulta::create([
            'centro_codigo' => $this->centro_codigo,
            'empleado_codigo' => $this->empleado_codigo,
            'especialidad_codigo' => $this->especialidad_codigo,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'paciente' => $this->paciente,


        ]);

        $this->reset(['centro_codigo','empleado_codigo','especialidad_codigo','fecha','hora','paciente','accion']);
    }

    //Edit Corresponsales
    public function edit(Consulta $corr)
    {
        $this->accion = "update";
        $this->centro_codigo = $corr->centro_codigo;
        $this->empleado_codigo = $corr->empleado_codigo;
        $this->especialidad_codigo = $corr->especialidad_codigo;
        $this->fecha = $corr->fecha;
        $this->hora = $corr->hora;
        $this->paciente = $corr->paciente;
        $this->id_con = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Consulta::find($this->id_con);
        $corr->update([
            'centro_codigo' => $this->centro_codigo,
            'empleado_codigo' => $this->empleado_codigo,
            'especialidad_codigo' => $this->especialidad_codigo,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'paciente' => $this->paciente,



        ]);
        $this->reset(['centro_codigo','empleado_codigo','especialidad_codigo','fecha','hora','paciente','accion']);


    }
    function
default() {
    $this->reset(['centro_codigo','empleado_codigo','especialidad_codigo','fecha','hora','paciente','accion']);

    }
    public function destroy(Consulta $corr)
    {
        $corr->delete();
    }
}
