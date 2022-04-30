@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
        <div class="col-xl-12">
            <form method="POST" action="{{route('niveles.update', [$nivel->id])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$nivel->name}}" autocomplete="off" name="name" class="form-control" type="text" placeholder="Nombre">
                </div>
                <br>
                    <label class="label">Correo Electronico</label>
                    <input required value="{{$nivel->email}}" autocomplete="off" name="email" class="form-control" type="text" placeholder="Correo Electronico">
                    <br>
            </div>
               

                <div class="oculto2">
                <div class="btn btn-danger " onclick="myFunction()">Cambiar Contraseña</div>
                </div>
                
                <div class="oculto">
                    <label class="label">Contraseña</label>
                        <input autocomplete="off" name="password" class="form-control pass" type="text" placeholder="Contraseña">
                        <br>
                        <div class="btn btn-danger" onclick="myFunction2()">No Cambiar Contraseña</div>  
                </div>

                   
                </div>
                <br>
                <br>
              
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route('niveles.index')}}">Volver</a>
            </form>
        </div>
    </div>
</div>



    @endsection