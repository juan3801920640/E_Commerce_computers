@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Categorias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->priority}}</td>
                            <td><a href="{{route('categories.edit',$category)}}" class="btn btn-outline-success">Editar</a></td>
                            <td>
                                <form method="post" action="{{route("categories.destroy", $category)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Seguro que desea eliminar la categoria?')">
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
            <a href="{{route("categories.create")}}" class="btn btn-primary">
                Crear una nueva categoria
        </a>
        </div>
    </div>
</div>
@endsection