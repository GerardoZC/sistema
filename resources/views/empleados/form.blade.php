
<h1> {{$Modo}} empleado </h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>



@endif


<div class="form-group">
<label for="Nombre">{{'Nombre'}}</label>
<input type='text' class="form-control" name="Nombre" id="Nombre" 
value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
<br/>
</div>

<div class="form-group">
<label for="ApellidoPaterno">{{'Apellido Paterno'}}</label>
<input type='text' class="form-control" name="ApellidoPaterno" id="ApellidoPaterno"
value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
<br/>
</div>

<div class="form-group">
<label for="ApellidoMaterno">{{'Apellido Materno'}}</label>
<input type='text' class="form-control" name="ApellidoMaterno" id="ApellidoMaterno"
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
<br/>
</div>

<div class="form-group">
<label for="Correo">{{'Correo'}}</label>
<input type='email' class="form-control" name="Correo" id="Nombre"
value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
<br/>
</div>

<input class="btn btn-success" type='submit' value="{{$Modo =='Crear' ? 'Agregar': 'Modificar'}}">

<a class="btn btn-primary" href="{{url('empleados')}}">Regresar</a>