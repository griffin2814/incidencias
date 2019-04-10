<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $qs = Role::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( request $request)
    {
        $rol = new  Role();
        $rol->rol = $request['rol'];
        $rol->save();
        return redirect('roles/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new  Role();
        $rol->rol = $request['rol'];
        $rol->save();
        return $rol;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Role $rol, $id)
    {
        $registroEncontrado = Role::find($id);
        return $registroEncontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $rol)
    {
        //
    }

    public function list()
    {
        $rs = $this->index();
        return view('roles/lista', ['rs' => $rs]);

    }

}
