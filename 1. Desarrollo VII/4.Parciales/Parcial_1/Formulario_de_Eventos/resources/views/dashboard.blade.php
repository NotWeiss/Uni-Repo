@extends('templates/foundation')

@section('content')



<div class="links">

    <a href="{{ route('formulario') }}"><h1>e-Polls</h1></a>

</div>

@if ($inscritos->isNotEmpty())
    <div class="table">

        <table>

            <thead>

                <tr>
                    @foreach ($inscritos->first()->getAttributes() as $campo => $dato)
                        <th>{{ ucfirst($campo) }}</th>
                    @endforeach
                    <th>Areas de Interes</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($inscritos as $inscrito)

                    <tr>
                        
                        @foreach ($inscrito->getAttributes() as $campo => $dato)

                            @if ($campo === 'residencia')
                                <!-- Check if the residencia relationship is loaded and exists -->
                                <td>{{ $inscrito->paisResidencia ? $inscrito->paisResidencia->nombre : 'Unknown' }}</td>
                
                            @elseif($campo === 'nacionalidad')
                                <!-- Check if the nacionalidad relationship is loaded and exists -->
                                <td>{{ $inscrito->paisNacion ? $inscrito->paisNacion->demonimo : 'Unknown' }}</td>
                    
                            @else
                                <!-- Display the raw data for other fields -->
                                <td>{{ $dato }}</td>
                                
                            @endif
                            
                            
                        @endforeach

                        <td>
                            @foreach ($inscrito->area as $area)
                                {{ $area->opcion }}@if(!$loop->last)<br> @endif
                            @endforeach
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@else    

    <div style="color: rgba(21,21,21,1);">

        <p>No hay nadie inscrito en este evento.</p>

    </div>

@endif



@endsection
