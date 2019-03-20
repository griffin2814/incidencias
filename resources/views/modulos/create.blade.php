
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{url('modulos/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar un módulo</legend>

        <div class="form-group">
            <label for="">Nombre del módulo</label>
            <input type="text" class="form-control" id="modulo" name="modulo" placeholder="Escriba el modulo">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
