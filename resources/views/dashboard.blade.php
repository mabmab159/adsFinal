@extends("plantillas.plantilla")
@section("contenido")
    <div>
        <p>Aca va el estado actual de las habitaciones</p>
        <ul>
            @foreach($habitaciones as $habitacion)
                <div style="border: 1px solid">
                    <label>Numero de habitacion</label>
                    <p>{{$habitacion->numero_habitacion}}</p>
                    <label>Piso</label>
                    <p>{{$habitacion->piso}}</p>
                    <label>Estado</label>
                    <p>{{$habitacion->estado}}</p>
                    <a href="{{route("habitacion",["numero_habitacion"=>$habitacion->numero_habitacion])}}">
                        <button @if($habitacion->estado != 0)
                                disabled
                            @endif>Alquilar habitación
                        </button>
                    </a>
                    <a href="{{route("devolverHabitacion",["numero_habitacion"=>$habitacion->numero_habitacion])}}">
                        <button @if($habitacion->estado != 1)
                                disabled
                            @endif>
                            Desocupar habitación
                        </button>
                    </a>
                    <a href="{{route("habilitarHabitacion",["numero_habitacion"=>$habitacion->numero_habitacion])}}">
                        <button @if($habitacion->estado != 2)
                                disabled
                            @endif>Habilitar habitación
                        </button>
                    </a>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
