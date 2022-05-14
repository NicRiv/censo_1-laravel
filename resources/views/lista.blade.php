@extends('layouts.app')

@section('titulo', 'Lista de personas')

@section('contenido')
<div class="main-lista">
    <div>
        <h1>Lista de personas registradas</h1>
        @if ($lista !== 'vacio')
            @foreach ($lista as $p)
                <div class="persona">
                    <div class="header">
                        <div class="avatar">
                            <p><b>{{ $p['nombre'][0] . $p['apellido'][0] }}</b></p>
                        </div>
                        <div>
                            <h2>{{ $p['nombre'] }} {{ $p['apellido'] }}</h2>
                            <p>DNI: {{ $p['dni'] }}</p>    
                        </div>
                    </div>
                    
                    <div class="general">
                        <p>Fecha de nacimiento: {{ $p['nacimiento'] }}</p>
                        <p>Genero: {{ $p['genero'] }}</p>
                        <p>Estado civil: {{ $p['estadocivil'] }}</p>
                    </div>

                    <div class="contacto">
                        @if ($p['provincia'] !== null)
                            <p>Provincia: {{ $p['provincia'] }}</p>  
                        @else
                            <p>Provincia: <i>no especificado</i></p>  
                        @endif

                        @if ($p['localidad'] !== null)
                            <p>Localidad: {{ $p['localidad'] }}</p>
                        @else
                            <p>Localidad: <i>no especificado</i></p>
                        @endif
                        <p>Email: {{ $p['email'] }}</p>
                        <p>Telefono: {{ $p['telefono'] }}</p>
                    </div>

                </div>
            @endforeach
            @else
                <p><i>No hay personas registradas</i></p>
        @endif
    </div>
</div>
@endsection