@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Categoria creada</h1>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->priority}}</td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
</div>
@endsection