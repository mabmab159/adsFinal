@extends("plantillas.plantilla")
@section("contenido")
    <form method="post" action="{{route("creandoUsuario")}}">
        @csrf
        <div>
            <label>Nombre</label>
            <input name="nombre">
        </div>
        <div>
            <label>Apellido</label>
            <input name="apellido">
        </div>
        <div>
            <label>Cargo</label>
            <select name="cargo">
                <option value="administrador">Administrador</option>
                <option value="recepcionista">Recepcionista</option>
                <option value="conserje">Conserje</option>
            </select>
        </div>
        <div>
            <label>Usuario</label>
            <input name="usuario">
        </div>
        <div>
            <label>Password</label>
            <input name="password">
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
    <p>Aca va el formulario para que se creen nuevos usuarios prro</p>
    <div>
        <p>Aca iria el listado actual de empleados</p>
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cargo</td>
                <td>Usuario</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->cargo}}</td>
                    <td>{{$usuario->usuario}}</td>
                    <td>Aca ira botonazo editar</td>
                    <td>Aca ira botonazo eliminar</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
