
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{url('cargos/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar un cargo</legend>

        <div class="form-group">
            <label for="">Nombre del cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escriba el cargo">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
