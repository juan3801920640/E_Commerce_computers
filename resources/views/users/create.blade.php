@extends("layouts.app")
@section("title", "Crear nuevo usuario")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Crear nuevo usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('users.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('users.store')}}">
            @csrf
            <div class="col-md-6 mt-2">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
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