
@extends('layouts.estilos')

@section('content')


<div class="row mt40">

<a href="{{ url('') }}" type="button" class="btn btn-warning">Regresar</a>
    <div class="card-header bg-info">
    Lista de Cargos
  </div>
    <table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Módulo</th>
                <th>Tipo de incidencia</th>
                <th>User</th>
                <th>Fecha creada</th>
                <th>Fecha actualizado</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->titulo}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->modulo_id}}</td>
            <td>{{$item->tipo_incidencia_id}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/incidencias/create" class="btn btn-success">Agregar</a>
                <a href="/incidencias/edit/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('incidencias', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
               </td>
               <td>
                @csrf()
                @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
