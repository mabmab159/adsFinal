@extends("plantillas.plantilla")
@section("contenido")

    <div>
        <p>Este es el formulario de las habitaciones</p>
        <form method="post"
              action="{{route("alquilarHabitacion", ["numero_habitacion"=>$habitacion->numero_habitacion])}}">
            @csrf
            <div>
                <label>Numero de habitacion</label>
                <input value="{{$habitacion->numero_habitacion}}" name="numero_habitacion" disabled>
            </div>
            <div>
                <label>Piso de la habitacion</label>
                <input value="{{$habitacion->piso}}" name="piso" disabled>
            </div>
            <div>
                <label>Precio</label>
                <input value="{{$habitacion->precio}}" name="precio" disabled>
            </div>
            <div>
                <label>Nombre de cliente</label>
                <input name="cliente">
            </div>
            <div>
                <label>Documento del cliente</label>
                <input name="dni">
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
