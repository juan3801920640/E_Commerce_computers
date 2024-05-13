@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{route('users.edit',$user)}}" class="btn btn-outline-success">Editar</a></td>
                            <td>
                                <form method="post" action="{{route("users.destroy", $user)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Seguro que desea eliminar el usuario?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        <div class="col-12 mt-3">
            <a href="{{route("users.create")}}" class="btn btn-primary">
                Crear un nuevo usuario
        </a>
        </div>
    </div>
</div>
@endsection