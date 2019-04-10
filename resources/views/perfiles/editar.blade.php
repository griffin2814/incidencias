
@extends('layouts.estilos')

@section('content')

<form action="{{url('perfiles', $perfil->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar perfil</legend>
  </div>
    <div class="form-group">
        <label for="">Nombres</label>
        <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Escriba el nuevo nombre">
    </div>

    <div class="form-group">
        <label for="">Apellidos</label>
        <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Escriba el nuevo apellido">
    </div>

    <div class="form-group">
        <label for="">Sexo</label>
        <input value="{{$perfil->sexo_id}}" name="sexo_id" type="text" class="form-control" id="sexo_id" placeholder="Escriba el nuevo sexo">
    </div>

    <div class="form-group">
        <label for="">Cargo</label>
        <input value="{{$perfil->cargo_id}}" name="cargo_id" type="text" class="form-control" id="cargo_id" placeholder="Escriba el nuevo cargo">
    </div>

    <div class="form-group">
        <label for="">Entidad</label>
        <input value="{{$perfil->entidad_id}}" name="entidad_id" type="text" class="form-control" id="entidad_id" placeholder="Escriba la nueva entidad">
    </div>

    <div class="form-group">
        <label for="">User</label>
        <input value="{{$perfil->user_id}}" name="user_id" type="text" class="form-control" id="user_id" placeholder="Escriba el nuevo usuario">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


