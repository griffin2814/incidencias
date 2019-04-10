
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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo_id</th>
                <th>Cargo_id</th>
                <th>entidad_id</th>
                <th>User_id</th>
                <th>Fecha creada</th>
                <th>Fecha actualizado</th>
               <th colspan="2"> <center>Opciones </center></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->sexo_id}}</td>
            <td>{{$item->cargo_id}}</td>
            <td>{{$item->entidad_id}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/perfiles/create" class="btn btn-success">Agregar</a>
                <a href="/perfiles/edit/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('perfiles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
