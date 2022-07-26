@extends("plantillas.plantilla")
@section("contenido")
    <div class="ventasContainer">
        <form method="post" action="{{route("realizarVenta")}}">
            @csrf
            <div class="formVentas">
                <h2>Ventas</h2>
                <div class="ventas-box">
                    <label>Cliente</label>
                    <input name="cliente" placeholder="Ingrese cliente">
                </div>
                <div class="ventas-box">
                    <label>DNI</label>
                    <input name="dni" placeholder="Ingrese DNI">
                </div>
                <p>Listado de productos</p>
                @foreach($productos as $producto)
                    <div>
                        <label>Nombre: {{$producto->nombre}}</label>
                        <label>Precio:
                            <input name="precio" value="{{$producto->precio}}"
                                   readonly/>
                        </label>
                        <label>Stock: {{$producto->stock}}</label>
                        <label>Cantidad a comprar: </label>
                        <input type="number" min=0 max={{$producto->stock}} name="producto{{$producto->id}}">
                    </div>
                @endforeach
                <div class="btnVentas">
                    <button type="submit">Guardar</button>
                </div>

            </div>

        </form>
    </div>
@endsection
