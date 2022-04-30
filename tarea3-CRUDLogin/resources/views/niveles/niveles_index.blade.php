@extends('layouts.app')
@section('content')


@if (session('status'))


     
@endif

<div class="container">
<div class="row">
        <div class="col-12">
            <a href="{{ route('register') }}" class="btn btn-success mb-2">Agregar</a>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre Usuario</th>
                    <th>Correo Usuario</th>
                    <th>Editar</th>
                    <th>Eliminar</th></tr>
                </thead>
                <tbody>
                @foreach($niveles as $nivel)
                    <tr>
                        <td>{{$nivel->name}}</td>
                        <td>{{$nivel->email}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('niveles.edit',[$nivel])}}">
                               Editar Usuario
                            </a>
                        </td>
                        @switch(true)
                        @case( Auth::user()->email == $nivel->email)
                            <td></td>
                        @break
                        @case( Auth::user()->email != $nivel->email)
                        <td>
                            <form action="{{route('niveles.destroy', [$nivel])}}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Eliminar Usuario
                                </button>
                            </form>
                        </td>
                        @break

                        @endswitch

                     
                        
                      
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
