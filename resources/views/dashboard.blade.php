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
                    <button><a
                            href={{route("habitacion",["numero_habitacion"=>$habitacion->numero_habitacion])}}>Textazo</a>
                    </button>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
