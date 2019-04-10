
@extends('layouts.estilos')

@section('content')

<form action="{{url('incidencias', $incidencia->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar incidencia</legend>
  </div>
    <div class="form-group">
        <label for="">Título</label>
        <input value="{{$incidencia->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Escriba el nuevo título">
    </div>

    <div class="form-group">
        <label for="">Descripción</label>
        <input value="{{$incidencia->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Escriba la nueva descripción">
    </div>

    <div class="form-group">
        <label for="">Módulo</label>
        <input value="{{$incidencia->modulo_id}}" name="modulo_id" type="text" class="form-control" id="modulo_id" placeholder="Escriba el nuevo módulo">
    </div>

    <div class="form-group">
        <label for="">Tipo de incidencia</label>
        <input value="{{$incidencia->tipo_incidencia_id}}" name="tipo_incidencia_id" type="text" class="form-control" id="tipo_incidencia_id" placeholder="Escriba el nuevo tipo de incidencia">
    </div>

    <div class="form-group">
        <label for="">User</label>
        <input value="{{$incidencia->user_id}}" name="user_id" type="text" class="form-control" id="user_id" placeholder="Escriba el nuevo usuario">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

