@extends("plantillas.plantilla")
@section("contenido")
    <div>
        <p>Este es el formulario de las habitaciones</p>
        <form method="post" action="{{route("realizarVenta")}}">
            @csrf
            <div>
                <label>Nombre de cliente</label>
                <input name="cliente">
            </div>
            <div>
                <label>Documento del cliente</label>
                <input name="dni">
            </div>
            <p>Listado de productos</p>
            @foreach($productos as $producto)
                <div>
                    <label>Nombre: {{$producto->nombre}}</label>
                    <label>Precio: {{$producto->precio}}</label>
                    <label>Stock: {{$producto->stock}}</label>
                    <label>Cantidad a comprar: </label>
                    <input type="number" min=0 max={{$producto->stock}} name="producto{{$producto->id}}">
                </div>
            @endforeach
            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
