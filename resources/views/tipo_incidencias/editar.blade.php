
@extends('layouts.estilos')

@section('content')

<form action="{{url('tipo_incidencias', $tipo->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar tipo de incidencia</legend>
  </div>
    <div class="form-group">
        <label for="">Digite el tipo de incidencia</label>
        <input value="{{$tipo->tipo}}" name="tipo" type="text" class="form-control" id="tipo" placeholder="Escriba el tipo de incidencia">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


