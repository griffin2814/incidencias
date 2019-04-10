
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
    <form action="{{url('perfiles/lista')}}" method="POST" role="form">
        @csrf()
            <legend>Guardar un perfil</legend>

            <div class="form-group">
                <label for="">Nombres</label>
                <input type="text" class="form-control" id="perfil" name="nombres" placeholder="Escriba el nombre">

                <label for="">Apellidos</label>
                <input type="text" class="form-control" id="perfil" name="apellidos" placeholder="Escriba el apellido">

                <label for="">Sexo</label>
                <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el sexo">

                <label for="">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escriba el cargo">

                <label for="">Entidad</label>
                <input type="text" class="form-control" id="entidad" name="entidad" placeholder="Escriba el entidad">

                <label for="">User</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="Escriba el user">


            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


@endsection
