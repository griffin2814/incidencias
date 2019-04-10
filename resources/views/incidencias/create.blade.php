
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
    <form action="{{url('incidencias/lista')}}" method="POST" role="form">
        @csrf()
            <legend>Guardar una incidencia</legend>

            <div class="form-group">
            <label for="">Título</label>
                <input type="text" class="form-control" id="incidencia" name="titulo" placeholder="Escriba el titulo">

                <label for="">Descripción</label>
                <input type="text" class="form-control" id="incidencia" name="descripcion" placeholder="Escriba la descripción">

                <label for="">Módulo</label>
                <input type="text" class="form-control" id="incidencia" name="modulo_id" placeholder="Escriba el módulo">

                <label for="">Tipo de incidencia</label>
                <input type="text" class="form-control" id="incidencia" name="tipo_incidencia_id" placeholder="Escriba el tipo de incidencia">

                <label for="">User</label>
                <input type="text" class="form-control" id="incidencia" name="user_id" placeholder="Escriba el usuario">


            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>


@endsection
