@extends('templates/foundation')

@section('content')

<div class="background"></div>

<div class="content">

    <div>

        <form action="" method="POST">

            @csrf

            <!-- NOMBRE -->
            <div>

                <label for="nombre">Ingrese su nombre</label>
                <input 
                    type="text"
                    name="nombre"
                    placeholder="Lionel">

            </div>
            

            <!-- APELLIDO -->
            <div>

                <label for="apellido">Ingrese su apellido</label>
                <input 
                    type="text"
                    name="apellido"
                    placeholder="Messi">

            </div>


            <!-- EDAD -->
            <div>

                <label for="edad">Ingrese su edad</label>
                <input 
                    type="text"
                    name="edad"
                    placeholder="20">

            </div>


            <!-- SEXO -->
            <div>

                <label for="masculino">Masculino</label>
                <input 
                    type="radio"
                    id="masculino"
                    name="sexo"
                    value="M">

                <label for="femenino">Femenino</label>
                <input 
                    type="radio"
                    id="femenino"
                    name="sexo"
                    value="F">

            </div>


            <!-- RESIDENCIA -->
            <div>

                <label for="residencia">Seleccione su País de Residencia</label>
                <select name="residencia">

                    @foreach ($paises as $pais)

                        <option value="{{ $pais->pais_id }}">
                            {{ $pais->nombre }}
                        </option>

                    @endforeach

                </select>

            </div>
        

            <!-- NACIONALIDAD -->
            <div>

                <label for="nacionalidad">Seleccione su Nacionalidad</label>
                <select name="nacionalidad">

                    @foreach ($paises as $pais)

                        <option value="{{ $pais->pais_id }}">
                            {{ $pais->demonimo }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- TELEFONO -->
            <div>

                <label for="telefono">Ingrese su Numero de Teléfono</label>
                <input 
                    type="text"
                    name="telefono"
                    placeholder="00000000">

            </div>


            <!-- CORREO -->
            <div>

                <label for="correo">Ingrese su Correo Electrónico</label>
                <input 
                    type="text"
                    name="correo"
                    placeholder="micorreo@correo.com">

            </div>
            

            <!-- AREA DE INTERES -->
            <div>

                <p>
                    Seleccione las Areas que le resulten interesantes
                </p>

                @foreach ($opciones as $opcion)

                    <label for="opcion{{ $opcion->area_id }}">
                        {{ $opcion->opcion }}
                    </label>

                    <input 
                        type="checkbox"
                        id="opcion{{ $opcion->area_id }}"
                        name="tema[]">

                @endforeach

            </div>
    
        </form>

    </div>

</div>
    
@endsection
