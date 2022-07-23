@extends("plantillas.plantilla")
@section("contenido")

    <div>
        <p>Este es el formulario de las habitaciones</p>
        <form method="post">
            <div>
                <label>Numero de habitacion</label>
                <input value="{{$habitacion->numero_habitacion}}" disabled>
            </div>
            <div>
                <label>Piso de la habitacion</label>
                <input value="{{$habitacion->piso}}" disabled>
            </div>
            <div>
                <label>Precio</label>
                <input value="{{$habitacion->precio}}" disabled>
            </div>
            <div>
                <label>Nombre de cliente</label>
                <input>
            </div>
            <div>
                <label>Documento del cliente</label>
                <input>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
