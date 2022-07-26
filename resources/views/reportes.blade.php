@extends("plantillas.plantilla")
@section("contenido")
    <form method="post" action="{{route("filtrarReporte")}}">
        @csrf
        <div>
            Fecha inicio:
            <input name="inicio" type="date">
        </div>
        <div>
            Fecha fin:
            <input name="fin" type="date">
        </div>
        <button type="submit">Filtrar</button>
    </form>
    <div>Ingresos por alquiler</div>
    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Numero de habitación</td>
            <td>Precio</td>
            <td>Cliente</td>
            <td>DNI</td>
        </tr>
        </thead>
        <tbody>
        @foreach($alquileres as $alquiler)
            <tr>
                <td>{{$alquiler->id}}</td>
                <td>{{$alquiler->numero_habitacion}}</td>
                <td>{{$alquiler->precio}}</td>
                <td>{{$alquiler->cliente}}</td>
                <td>{{$alquiler->dni}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>Ingresos por ventas adicionales</div>
    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Nombre de producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Cliente</td>
            <td>DNI</td>
        </tr>
        </thead>
        <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->id}}</td>
                <td>{{$venta->nombre_producto}}</td>
                <td>{{$venta->cantidad}}</td>
                <td>{{$venta->precio}}</td>
                <td>{{$venta->cliente}}</td>
                <td>{{$venta->dni}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
