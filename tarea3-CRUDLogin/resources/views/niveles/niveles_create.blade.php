@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('niveles.store')}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="name" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label class="label">email</label>
                    <input required autocomplete="off" name="email" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                <div class="form-group">
                    <label class="label">password</label>
                    <input required autocomplete="off" name="password" class="form-control"
                           type="text" placeholder="password">
                </div>

               
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route('niveles.index')}}">Volver al listado</a>
            </form>
        </div>
    </div>

@endsection