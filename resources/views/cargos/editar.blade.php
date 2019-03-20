
@extends('layouts.estilos')

@section('content')

<form action="{{url('cargos', $cargo->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar cargo</legend>
  </div>
    <div class="form-group">
        <label for="">Nombre del cargo</label>
        <input value="{{$cargo->cargo}}" name="cargo" type="text" class="form-control" id="cargo" placeholder="Escriba el nuevo nombre del cargo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


