
@extends('layouts.estilos')

@section('content')

<form action="{{url('users', $user->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar usuario</legend>
  </div>
    <div class="form-group">
        <label for="">Usuario</label>
        <input value="{{$user->name}}" name="name" type="text" class="form-control" id="name" placeholder="Escriba el nuevo nombre">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input value="{{$user->email}}" name="email" type="text" class="form-control" id="email" placeholder="Escriba el nuevo email">
    </div>

    <div class="form-group">
        <label for="">Contraseña</label>
        <input value="{{$user->password}}" name="password" type="text" class="form-control" id="password" placeholder="Escriba el nueva contraseña">
    </div>


    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

