
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{url('tipo_incidencias/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar sexo</legend>

        <div class="form-group">
            <label for="">Digite el tipo de incidencia</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Escriba el tipo de incidencia">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
