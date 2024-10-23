@extends('templates/foundation')

@section('content')

<div class="links">

    <a href="{{ route('formulario') }}"><h1>e-Polls</h1></a>

    <a href="{{ route('dashboard') }}">REGISTROS</a>

</div>

<div>

    <form action="{{ route('respuesta') }}" class="pico" method="POST">

        @csrf

        <!-- NOMBRE -->
        <div class="container">

            <label for="nombre">Ingrese su nombre</label>
            <br>
            <input type="text" name="nombre" placeholder="Lionel" value="{{ old('nombre') }}">

            @error('nombre')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- APELLIDO -->
        <div class="container">

            <label for="apellido">Ingrese su apellido</label>
            <br>
            <input type="text" name="apellido" placeholder="Messi" value="{{ old('apellido') }}">

            @error('apellido')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- EDAD -->
        <div class="container">

            <label for="edad">Ingrese su edad</label>
            <br>
            <input type="text" name="edad" placeholder="20" value="{{ old('edad') }}">

            @error('edad')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- SEXO -->
        <div class="container2">

            <div class="row-h"><p>Seleccione su Sexo</p></div>

            <div class="row-b">

                <label for="masculino">Masculino</label>
                <input type="radio" id="masculino" name="sexo" value="M" {{ old('sexo') == 'M' ? 'checked' : '' }}>

                <label for="femenino">Femenino</label>
                <input type="radio" id="femenino" name="sexo" value="F" {{ old('sexo') == 'F' ? 'checked' : '' }}>

            </div>

            @error('sexo')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- RESIDENCIA -->
        <div class="container">

            <label for="residencia">Seleccione su País de Residencia</label>
            <br>
            <select name="residencia">

                @foreach ($paises as $pais)
                    <option value="{{ $pais->pais_id }}" {{ old('residencia') == $pais->pais_id ? 'selected' : '' }}>
                        {{ $pais->nombre }}
                    </option>
                @endforeach

            </select>

            @error('residencia')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- NACIONALIDAD -->
        <div class="container">

            <label for="nacionalidad">Seleccione su Nacionalidad</label>
            <br>
            <select name="nacionalidad">

                @foreach ($paises as $pais)
                    <option value="{{ $pais->pais_id }}" {{ old('nacionalidad') == $pais->pais_id ? 'selected' : '' }}>
                        {{ $pais->demonimo }}
                    </option>
                @endforeach

            </select>

            @error('nacionalidad')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- TELEFONO -->
        <div class="container">

            <label for="telefono">Ingrese su Numero de Teléfono</label>
            <br>
            <input type="text" name="telefono" placeholder="00000000" value="{{ old('telefono') }}">

            @error('telefono')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- CORREO -->
        <div class="container">

            <label for="correo">Ingrese su Correo Electrónico</label>
            <br>
            <input type="text" name="correo" placeholder="micorreo@correo.com" value="{{ old('correo') }}">

            @error('correo')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <!-- AREA DE INTERES -->
        <div class="container2">

            <div class="row-h"><p>Seleccione las Areas que le resulten interesantes</p></div>

            <div class="row-b">

                @foreach ($opciones as $opcion)

                    <label for="opcion{{ $opcion->area_id }}">{{ $opcion->opcion }}</label>
                    <input type="checkbox" id="opcion{{ $opcion->area_id }}" name="tema[]" value="{{ $opcion->area_id }}" {{ in_array($opcion->area_id, old('tema', [])) ? 'checked' : '' }}>

                @endforeach

            </div>

            @error('tema')
                <div class="alerta">{{ $message }}</div>
            @enderror

        </div>

        <input type="submit" class="button" value="REGISTRARSE">

    </form>

</div>

@endsection
