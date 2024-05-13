@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Computadores</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($computers as $computer)
                        <tr>
                            <th scope="row">{{$computer->id}}</th>
                            <td>{{$computer->brand}}</td>
                            <td>{{$computer->price}}</td>
                            <td><a href="{{route('computersAdmin.edit',$computer)}}" class="btn btn-outline-success">Editar</a></td>
                            <td>
                                <form method="post" action="{{route("computersAdmin.destroy", $computer)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Seguro que desea eliminar el computador?')">
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
            <a href="{{route("computersAdmin.create")}}" class="btn btn-primary">
                Crear un nuevo computador
        </a>
        </div>
    </div>
</div>
@endsection