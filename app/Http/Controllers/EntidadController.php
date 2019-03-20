<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $qs = Entidad::all();

    return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $entidad = new  Entidad();
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entidad = new  Entidad();
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return $entidad;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show(Entidad $entidad, $id)
    {
        $registroEncontrado = Entidad::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidad $entidad)
    {
        return view('entidades/editar', ['entidad' => $entidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidad $entidad)
    {
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidad $entidad)
    {
        $entidad->delete();
        return redirect('entidades/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('entidades/lista', ['rs' => $rs]);
    }

}
