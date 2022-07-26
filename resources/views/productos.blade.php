@extends("plantillas.plantilla")
@section("contenido")
    @if(isset($producto))
        <form method="post" action="{{route("crearProducto")}}">
            @csrf
            <div style="display: none">
                <label>id</label>
                <input name="id" value="{{$producto->id}}">
            </div>
            <div>
                <label>Nombre producto</label>
                <input name="nombre" value="{{$producto->nombre}}">
            </div>
            <div>
                <label>Precio</label>
                <input name="precio" value="{{$producto->precio}}">
            </div>
            <div>
                <label>Stock</label>
                <input name="stock" value="{{$producto->stock}}">
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    @else
        <form method="post" action="{{route("crearProducto")}}">
            @csrf
            <div style="display: none">
                <label>id</label>
                <input name="id" value="0">
            </div>
            <div>
                <label>Nombre producto</label>
                <input name="nombre">
            </div>
            <div>
                <label>Precio</label>
                <input name="precio">
            </div>
            <div>
                <label>Stock</label>
                <input name="stock">
            </div>
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
    @endif
    <div>
        <p>Aca iria el listado actual de productos</p>
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Stock</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                        <form method="post" action="{{route("editarProducto")}}">
                            @csrf
                            <input name="id" value="{{$producto->id}}" style="display: none">
                            <button>Editar</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="{{route("eliminarProducto")}}">
                            @csrf
                            <input name="id" value="{{$producto->id}}" style="display: none">
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
