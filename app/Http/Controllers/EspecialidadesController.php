<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use App\Http\Requests\StoreEspecialidadesRequest;
use App\Http\Requests\UpdateEspecialidadesRequest;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.Especialidad');
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
     * @param  \App\Http\Requests\StoreEspecialidadesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEspecialidadesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidades $especialidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidades $especialidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEspecialidadesRequest  $request
     * @param  \App\Models\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEspecialidadesRequest $request, Especialidades $especialidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialidades  $especialidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidades $especialidades)
    {
        //
    }
}
