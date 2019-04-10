
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
    <form action="{{url('roles/lista')}}" method="POST" role="form">
        @csrf()
            <legend>Guardar un rol</legend>

            <div class="form-group">
            <label for="">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Escriba el nombre">

                <label for="">guard_name</label>
                <input type="text" class="form-control" id="guard_name" name="guard_name" placeholder="Escriba el Guard name">

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


@endsection
