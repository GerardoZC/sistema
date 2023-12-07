@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('Mensaje')) 
    <div class="alert alert-success alert-dismissible" role="alert" >
    {{Session::get('Mensaje')}}
    </div>
    @endif  


<a href="{{url('empleados/create')}}" class="btn btn-success" >Agregar Empleado</a>
<br/>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado-> Nombre}}</td>
            <td>{{$empleado-> ApellidoPaterno}}</td>
            <td>{{$empleado-> ApellidoMaterno}}</td>
            <td>{{$empleado-> Correo}}</td>
            <td>
            
            <a href="{{url('/empleados/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                Editar
            </a>
            
             |
            
            <form method="post" action="{{url('/empleados/'.$empleado->id)}}" class="d-inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres Borrar?');" value="Borrar" >
            </form>
            
            </td>
        </tr>
    @endforeach 
    </tbody>
</table>
</div>
@endsection