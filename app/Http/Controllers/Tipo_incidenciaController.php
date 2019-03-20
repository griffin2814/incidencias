<?php

namespace App\Http\Controllers;

use App\Tipo_incidencia;
use Illuminate\Http\Request;

class Tipo_incidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Tipo_incidencia::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tipo_incidencia = new  Tipo_incidencia();
        $tipo_incidencia->tipo_incidencia = $request['tipo'];
        $tipo_incidencia->save();
        return redirect('tipo_incidencia/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_incidencia = new  Tipo_incidencia();
        $tipo_incidencia->tipo_incidencia = $request['tipo'];
        $tipo_incidencia->save();
        return $tipo_incidencia;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_incidencia  $tipo_incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_incidencia $tipo_incidencia, $id)
    {
        $registroEncontrado = Tipo_incidencia::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_incidencia  $tipo_incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_incidencia $tipo_incidencia)
    {
        return view('tipo_incidencias/editar', ['tipo' => $tipo_incidencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_incidencia  $tipo_incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_incidencia $tipo_incidencia)
    {
        $tipo_incidencia->tipo_incidencia = $request['tipo'];
        $tipo_incidencia->save();
        return redirect('tipo_incidencias/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_incidencia  $tipo_incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIncidencia $tipoIncidencia)
    {
        $tipoIncidencia->delete();
        return redirect('tiposincidencias/list');
    }


    public function list()
    {
        $rs = $this->index();
        return view('tiposincidencias/lista', ['rs' => $rs]);
    }
}
