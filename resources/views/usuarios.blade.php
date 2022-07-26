@extends("plantillas.plantilla")
@section("contenido")
    <div class="usuariosContainer">
    @if(isset($usuario))
        <form method="post" action="{{route("creandoUsuario")}}">
            @csrf
            <div class="usuario-box">
                <h2>Editar usuario</h2>
                <div class="textBox">
                    <label>id</label>
                    <input name="id" value="{{$usuario->id}}">
                </div>
                <div class="textBox">
                    <label>Nombre</label>
                    <input name="nombre" value="{{$usuario->nombre}}">
                </div>
                <div class="textBox">
                    <label>Apellido</label>
                    <input name="apellido" value="{{$usuario->apellido}}">
                </div>
                <div>
                    <label>Cargo</label>
                    <select name="cargo">
                        @if($usuario->cargo == "administrador")
                            <option value="administrador" selected>Administrador</option>
                        @else
                            <option value="administrador">Administrador</option>
                        @endif
                        @if($usuario->cargo == "recepcionista")
                            <option value="recepcionista" selected>Recepcionista</option>
                        @else
                            <option value="recepcionista">Recepcionista</option>
                        @endif
                        @if($usuario->cargo == "conserje")
                            <option value="conserje" selected>Conserje</option>
                        @else
                            <option value="conserje">Conserje</option>
                        @endif
                    </select>
                </div>
                <div>
                    <label>Usuario</label>
                    <input name="usuario" value="{{$usuario->usuario}}">
                </div>
                <div>
                    <label>Password</label>
                    <input name="password">
                </div>
                <div>
                    <button type="submit">Guardar</button>
                </div>
            </div>
            
        </form>
    @else
        <form method="post" action="{{route("creandoUsuario")}}">
            @csrf
            <div class="usuario-box">
                <h2>Crear usuario</h2>
                <div class="textBox">
                    <label class="textId">id:</label>
                    <input name="id" value="0" placeholder="Ingrese id">
                </div>
                <div class="textBox">
                    <label>Nombre:</label>
                    <input name="nombre" placeholder="Ingrese nombre">
                </div>
                <div class="textBox">
                    <label>Apellido:</label>
                    <input name="apellido" placeholder="Ingrese apellido">
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
                
            </div>
            
        </form>
    @endif

    <div class="tableContainer">
        <table cellspacing="0">
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
                    <td class="subFormContainer">
                        <form method="post" action="{{route("editarUsuario")}}">
                            @csrf
                            <input name="id" value="{{$usuario->id}}" style="display: none">
                            <button class="editButton">Editar</button>
                        </form>
                    </td>
                    <td class="subFormContainer">
                        <form method="post" action="{{route("eliminarUsuario")}}">
                            @csrf
                            <input name="id" value="{{$usuario->id}}" style="display: none">
                            <button class="deleteButton">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
