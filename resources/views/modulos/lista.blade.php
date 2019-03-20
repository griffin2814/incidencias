
@extends('layouts.estilos')

@section('content')


<div class="row mt40">

<a href="{{ url('') }}" type="button" class="btn btn-warning">Regresar</a>
    <div class="card-header bg-info">
    Lista de módulo
  </div>
    <table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Módulo</th>
                <th>Fecha creada</th>
                <th>Fecha actualizado</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->modulo}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/modulos/create" class="btn btn-success">Agregar</a>
                <a href="/modulos/edit/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('modulos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
