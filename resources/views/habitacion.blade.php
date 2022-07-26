@extends("plantillas.plantilla")
@section("contenido")
<div class="habitacionContainer">
    @if(isset($habitacion))
            <form method="post" action="{{route("crearHabitacion")}}">
                @csrf
                <div class="formHabitacion">
                    <h2>Habitaciones</h2>
                    <div class="habitacion-box">
                        <label>id</label>
                        <input name="id" value="{{$habitacion->id}}" >
                    </div>
                    <div class="habitacion-box">
                        <label>N° Hab</label>
                        <input name="numero_habitacion" value="{{$habitacion->numero_habitacion}}" autocomplete="off" placeholder="Ingrese N° Hab">
                    </div>
                    <div class="habitacion-box">
                        <label>Piso</label>
                        <input name="piso" value="{{$habitacion->piso}}"autocomplete="off" placeholder="Ingrese N° de piso">
                    </div>
                    <div class="habitacion-box">
                        <label>Precio</label>
                        <input name="precio" value="{{$habitacion->precio}}"autocomplete="off" placeholder="Ingrese el precio">
                    </div>
                    <div class="btnHabitacion">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        @else
            <form method="post" action="{{route("crearHabitacion")}}">
                @csrf
                <div class="formHabitacion">
                    <h2>Crear habitación</h2>
                    <div class="habitacion-box">
                        <label>id</label>
                        <input name="id" value="0">
                    </div>
                    <div class="habitacion-box">
                        <label>N° Hab</label>
                        <input name="numero_habitacion" autocomplete="off" placeholder="Ingrese N° Hab">
                    </div>
                    <div class="habitacion-box">
                        <label>Piso</label>
                        <input name="piso" autocomplete="off" placeholder="Ingrese N° de piso">
                    </div>
                    <div class="habitacion-box">
                        <label>Precio</label>
                        <input name="precio" autocomplete="off" placeholder="Ingrese el precio">
                    </div>
                    <div class="btnHabitacion">
                        <button type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        @endif
        <div class="tableContainerHabitacion">
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
</div>
   
@endsection
