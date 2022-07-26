@extends("plantillas.plantilla")
@section("contenido")
    <div class="habitacionesContainer">
        <h2>Status de Habitaciones</h2>
        <div class="habitacionesGrid">
            @foreach($habitaciones as $habitacion)
            <div class="habitacionItem"
                @if($habitacion->estado == 0)
                    style="background-color: rgba(46,152,46,0.6)"
                @elseif($habitacion->estado == 1)
                style="background-color: rgba(255,0,0,0.6)"
                @else
                    style="background-color: rgba(230,218,11,0.6)"
                @endif
            >
                <h3>Habitación {{$habitacion->numero_habitacion}}</h3>

                <div class="habitacionInfo">
                    <label>Piso</label>
                    <p>{{$habitacion->piso}}</p>
                </div>
                <div class="habitacionInfo">
                    <label>Estado</label>
                    @if($habitacion->estado == 0)
                        <p>Disponible</p>
                    @elseif($habitacion->estado == 1)
                        <p>Ocupada</p>
                    @else
                        <p>Pendiente</p>
                    @endif
                </div>
                
                <div class="habitacionInfo habitacionButtons">
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
                
            </div>
            @endforeach
        </div>
    </div>
@endsection
