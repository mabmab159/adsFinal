@extends("plantillas.plantilla")
@section("contenido")
    <div>
        <p>Aca va el estado actual de las habitaciones</p>
        <ul>
            @foreach($habitaciones as $habitacion)
                <div style="border: 1px solid">
                    <p>{{$habitacion->id}}</p>
                    <p>{{$habitacion->numero_habitacion}}</p>
                    <p>{{$habitacion->piso}}</p>
                    <p>{{$habitacion->estado}}</p>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
