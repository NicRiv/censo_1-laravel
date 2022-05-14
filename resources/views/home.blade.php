@extends('layouts.app')

@section('titulo', 'Inicio - Formulario')

@section('contenido')

<div class="main">
    <div class="formulario">
        <h1>Complete el siguiente formulario</h1>
        @if ($notificacion)
            <div class="agregada">
                <p>Tus datos han sido guardados</p>
            </div>
        @endif

        <form action="{{ route('home.agregar') }}" method="POST">
            @csrf
            <div class="bloque1">
                <div>
                    <label for="nombre">*Nombre</label>
                    <input type="text" name="nombre" required>
                    @error('nombre')
                        <p><small>{{ $message }}</small></p>
                    @enderror    
                </div>

                <div>
                    <label for="apellido">*Apellido</label>
                    <input type="text" name="apellido" required>
                    @error('apellido')
                        <p><small>{{ $message }}</small></p>
                    @enderror       
                </div>
            </div>
            
            <div class="bloque2">
                <div>
                    <label for="dni">*DNI</label>
                    <input type="number" name="dni" required>       
                    @error('dni')
                        <p><small>{{ $message }}</small></p>
                    @enderror    
                </div>

                <div>
                    <label for="nacimiento">*Fecha de nacimiento</label>
                    <input type="date" name="nacimiento" min="1900-01-01" max="2022-01-01" required>    
                    @error('nacimiento')
                        <p><small>{{ $message }}</small></p>
                    @enderror    
                </div>
            </div>

            <div class="bloque3">
                <div>
                    <div>
                        <p>*Genero</p>
                    </div>
                    <div class="opc">
                        <div>
                            <input type="radio" id="genMasculino" name="genero" value="Masculino" required>
                            <label for="genMasculino">Masculino</label>
                        </div>
                        <div>
                            <input type="radio" id="genFemenino" name="genero" value="Femenino">
                            <label for="genFemenino">Femenino</label>
                        </div>
                        <div>
                            <input type="radio" id="genOtro" name="genero" value="Otro">
                            <label for="genOtro">Otro</label>
                        </div>                                                
                    </div>
                    <div>
                        @error('genero')
                        <p><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                </div>    

                <div>
                    <label for="estadocivil">*Estado civil</label>
                    <select name="estadocivil">
                        <option value="Solter">Soltero/a</option>
                        <option value="Casad">Casado/a</option>
                        <option value="Union libre">Union libre</option>
                        <option value="Divorciad">Divorciado/a</option>
                        <option value="Viud">Viudo/a</option>
                    </select>    
                </div>
            </div>

            <div class="bloque4">
                <div>
                    <label for="provincia">Provincia</label>
                    <input type="text" name="provincia">    
                </div>
                <div>
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad">                    
                </div>
            </div>

            <div class="bloque5">
                <div>
                    <label for="email">*Email</label>
                    <input type="email" name="email" required>
                    @error('email')
                        <p><small>{{ $message }}</small></p>
                    @enderror    
                </div>
    
                <div>
                    <label for="telefono">*Telefono</label>
                    <input type="number" name="telefono" required>
                    @error('telefono')
                        <p><small>{{ $message }}</small></p>
                    @enderror    
                </div>
            </div>

            {{-- Enviar --}}
            <div class="enviarformulario">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <div class="lateralform">
        <p>* Los campos que llevan el asterisco son requeridos para enviar el formulario.</p>
        <br>
        <p>Los datos del DNI, email, y el telefono son únicos; no puede haber dos personas con 
            el mismo valor de dichos campos.</p>
        <br>
        <br>
        <p><b>Una vez completado el formulario, se le notificará que ha sido añadido/a a la lista de 
            personas registradas.</b></p>
    </div>
</div>
    
@endsection