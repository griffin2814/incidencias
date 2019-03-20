
@extends('layouts.estilos')

@section('content')

<form action="{{url('entidades', $entidad->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
<legend>Agregar entidad</legend>
    </div>
    <div class="form-group">
        <label for="">Nombre de la entidad</label>
        <input value="{{$entidad->entidad}}" name="entidad" type="text" class="form-control" id="entidad" placeholder="Escriba el nuevo nombre de la entidad">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
