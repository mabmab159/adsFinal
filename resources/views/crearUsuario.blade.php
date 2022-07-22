@extends("plantillas.plantilla")
@section("contenido")
    <form method="post" action="{{route("creandoUsuario")}}">
        @csrf
        <div>
            <label>Nombre</label>
            <input>
        </div>
        <div>
            <label>Apellido</label>
            <input>
        </div>
        <div>
            <label>Cargo</label>
            <select>
                <option value="administrador">Administrador</option>
                <option value="recepcionista">Recepcionista</option>
                <option value="conserje">Conserje</option>
            </select>
        </div>
        <div>
            <label>Usuario</label>
            <input>
        </div>
        <div>
            <label>Password</label>
            <input>
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
    <p>Aca va el formulario para que se creen nuevos usuarios prro</p>
@endsection
