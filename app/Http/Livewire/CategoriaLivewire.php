<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class CategoriaLivewire extends Component
{
    public $search = '';
    public $nombre = '';
    public $tipo = '';
    public $descripcion = '';
    public $id_cat;
    public $accion = 'store';
    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'tipo' => 'required'
    ];

    protected $messages = [
        'nombre.required' => "Ingrese nombre Obligatorio",
        'descripcion.required' => "Ingrese un País Obligatorio",
        'tipo.required' => "Ingrese un tipo Obligatorio"
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
       public function render()
    {
        $categorias = Categoria::where('nombre','like','%'. $this->search . '%')->get();;
        return view('livewire.categoria-livewire',compact('categorias'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Categoria::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'tipo' => $this->tipo,
        ]);

        $this->reset(['nombre', 'descripcion','accion','tipo']);
    }

    //Edit Corresponsales
    public function edit(Categoria $corr)
    {
        $this->accion = "update";
        $this->nombre = $corr->nombre;
        $this->descripcion = $corr->descripcion;
        $this->tipo = $corr->tipo;
        $this->id_cat = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Categoria::find($this->id_cat);
        $corr->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'tipo' => $this->tipo,

        ]);
        $this->reset(['nombre', 'descripcion','accion','tipo']);


    }
    function
default() {
    $this->reset(['nombre', 'descripcion','accion','tipo']);

    }
    public function destroy(Categoria $corr)
    {
        $corr->delete();
    }
}
