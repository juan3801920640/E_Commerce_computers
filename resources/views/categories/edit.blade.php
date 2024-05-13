@extends("layouts.app")
@section("title",  "Edit {$category->name}")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Editar {{$category->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('categories.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('categories.update', $category)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-2">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name', $category->name)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" placeholder="description">{{old('description', $category->description)}}</textarea>
            </div>
            <div class="col-md-6 mt-2">
                <label for="priority" class="form-label">Prioridad</label>
                <input type="number" class="form-control" id="priority" name="priority" value="{{old('priority', $category->priority)}}">
            </div>
            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection