<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Perfil::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return redirect('perfiles/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new  Perfil();
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id = $request['sexo_id'];
        $perfil->cargo_id = $request['cargo_id'];
        $perfil->entidad_id = $request['entidad_id'];
        $perfil->user_id = $request['user_id'];
        $perfil->save();
        return $perfil;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil, $id)
    {
        $registroEncontrado = Perfil::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('perfiles/editar', ['perfil' => $perfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id = $request['sexo_id'];
        $perfil->cargo_id = $request['cargo_id'];
        $perfil->entidad_id = $request['entidad_id'];
        $perfil->user_id = $request['user_id'];
        $perfil->save();
        return redirect('perfiles/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('perfiles/lista', ['rs' => $rs]);
    }

}
