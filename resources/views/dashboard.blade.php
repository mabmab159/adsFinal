@extends("plantillas.plantilla")
@section("contenido")
    <div>
        <p>Aca va el estado actual de las habitaciones</p>
        <ul>
            @for($i =0;$i<12;$i++)
                <li>Esta es la habitacion {{$i+1}}</li>
            @endfor
        </ul>
    </div>
@endsection
