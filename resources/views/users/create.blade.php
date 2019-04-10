
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
    <form action="{{url('users/lista')}}" method="POST" role="form">
        @csrf()
            <legend>Guardar un usuario</legend>

            <div class="form-group">
            <label for="">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Escriba el nombre">

                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Escriba el email">

                <label for="">Contraseña</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Escriba la contraseña">

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


@endsection
