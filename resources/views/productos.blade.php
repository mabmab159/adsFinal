@extends("plantillas.plantilla")
@section("contenido")
    <div class="productosContainer">
    @if(isset($producto))
        <form method="post" action="{{route("crearProducto")}}">
            @csrf
            <div class="formProductos">
                <h2>Crear producto</h2>
                <div class="productos-box">
                    <label>id</label>
                    <input name="id" value="{{$producto->id}}">
                </div>
                <div class="productos-box">
                    <label>Nombre producto</label>
                    <input name="nombre" value="{{$producto->nombre}}"autocomplete="off" placeholder="Ingrese Producto">
                </div>
                <div class="productos-box">
                    <label>Precio</label>
                    <input name="precio" value="{{$producto->precio}}"autocomplete="off" placeholder="Ingrese precio">
                </div>
                <div class="productos-box">
                    <label>Stock</label>
                    <input name="stock" value="{{$producto->stock}}"autocomplete="off" placeholder="Ingrese Stock">
                </div>
                <div class="btnProductos">
                    <button type="submit">Guardar</button>
                </div>
            </div>
           
        </form>
    @else
        <form method="post" action="{{route("crearProducto")}}">
            @csrf
          <div class="formProductos">
          <h2>Crear producto</h2>
            <div class="productos-box">
                    <label>id</label>
                    <input name="id" value="0">
                </div>
                <div class="productos-box">
                    <label>Nombre producto</label>
                    <input name="nombre" placeholder="Ingrese Producto" autocomplete="off">
                </div>
                <div class="productos-box">
                    <label>Precio</label>
                    <input name="precio" placeholder="Ingrese precio" autocomplete="off">
                </div>
                <div class="productos-box">
                    <label>Stock</label>
                    <input name="stock" placeholder="Ingrese stock" autocomplete="off">
                </div>
                <div class="btnProductos">
                    <button type="submit">Registrar</button>
                </div>
          </div>
        </form>
    @endif
    <div class="tableContainerProductos">
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
    </div>
@endsection
