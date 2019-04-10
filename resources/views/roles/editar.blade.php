
@extends('layouts.estilos')

@section('content')

<form action="{{url('roles', $rol->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar rol</legend>
  </div>
    <div class="form-group">
        <label for="">Nombre</label>
        <input value="{{$rol->name}}" name="name" type="text" class="form-control" id="name" placeholder="Escriba el nuevo nombre">
    </div>

    <div class="form-group">
        <label for="">guard_name</label>
        <input value="{{$rol->guard_name}}" name="guard_name" type="text" class="form-control" id="guard_name" placeholder="Escriba el nuevo guard_name">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

