@extends("plantillas.plantilla")
@section("contenido")
    @if(isset($habitacion))
        <form method="post" action="{{route("crearHabitacion")}}">
            @csrf
            <div style="display: none">
                <label>id</label>
                <input name="id" value="{{$habitacion->id}}">
            </div>
            <div>
                <label>Numero de habitacion</label>
                <input name="numero_habitacion" value="{{$habitacion->numero_habitacion}}">
            </div>
            <div>
                <label>Piso</label>
                <input name="piso" value="{{$habitacion->piso}}">
            </div>
            <div>
                <label>Precio</label>
                <input name="precio" value="{{$habitacion->precio}}">
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    @else
        <form method="post" action="{{route("crearHabitacion")}}">
            @csrf
            <div style="display: none">
                <label>id</label>
                <input name="id" value="0">
            </div>
            <div>
                <label>Numero de habitacion</label>
                <input name="numero_habitacion">
            </div>
            <div>
                <label>Piso</label>
                <input name="piso">
            </div>
            <div>
                <label>Precio</label>
                <input name="precio">
            </div>
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
    @endif
    <div>
        <p>Aca iria el listado actual de empleados</p>
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Numero de habitación</td>
                <td>Piso</td>
                <td>Precio</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($habitaciones as $habitacion)
                <tr>
                    <td>{{$habitacion->id}}</td>
                    <td>{{$habitacion->numero_habitacion}}</td>
                    <td>{{$habitacion->piso}}</td>
                    <td>{{$habitacion->precio}}</td>
                    <td>
                        <form method="post" action="{{route("editarHabitacion")}}">
                            @csrf
                            <input name="id" value="{{$habitacion->id}}" style="display: none">
                            <button>Editar</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route("eliminarHabitacion")}}">
                            @csrf
                            <input name="id" value="{{$habitacion->id}}" style="display: none">
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
