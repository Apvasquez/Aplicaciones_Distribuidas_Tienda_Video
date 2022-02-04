<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proveedores;

class Proveedor extends Component
{
    public $search = '';
    public $nombre = '';
    public $lugar = '';
    public $descripcion = '';
    public $id_cat;
    public $accion = 'store';


       public function render()
    {
        $proveedor = Proveedores::where('nombre','like','%'. $this->search . '%')->get();
        return view('livewire.proveedor',compact('proveedor'));
    }
    public function store()
    {
        // $this->accion = "store";

        Proveedores::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lugar' => $this->lugar,
        ]);

        $this->reset(['nombre', 'descripcion','accion','lugar']);
    }

    //Edit proesponsales
    public function edit(Proveedores $pro)
    {
        $this->accion = "update";
        $this->nombre = $pro->nombre;
        $this->descripcion = $pro->descripcion;
        $this->lugar = $pro->lugar;
        $this->id_cat = $pro->id;

    }


    public function update()
    {
        // $this->validate();
        $pro = Proveedores::find($this->id_cat);
        $pro->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lugar' => $this->lugar,

        ]);
        $this->reset(['nombre', 'descripcion','accion','lugar']);


    }
    function
default() {
    $this->reset(['nombre', 'descripcion','accion','lugar']);

    }
    public function destroy(Proveedores $pro)
    {
        $pro->delete();
    }
}
