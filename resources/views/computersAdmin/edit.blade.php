@extends("layouts.app")
@section("title", "Editar {$computer->brand}")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Editar {{$computer->brand}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('computersAdmin.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('computersAdmin.update', $computer)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-2">
                <label for="brand" class="form-label">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca" value="{{old('brand', $computer->brand)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="ram" class="form-label">Ram</label>
                <input type="number" class="form-control" id="ram" name="ram" placeholder="Ram" value="{{old('ram', $computer->ram)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="hard_disk" class="form-label">Disco Duro</label>
                <input type="number" class="form-control" id="hard_disk" name="hard_disk" placeholder="Disco Duro" value="{{old('hard_disk', $computer->hard_disk)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="number_cores" class="form-label">Número de nucleos</label>
                <input type="number" class="form-control" id="number_cores" name="number_cores" placeholder="Número de nucleos" value="{{old('number_cores', $computer->number_cores)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="processor" class="form-label">Procesador</label>
                <input type="text" class="form-control" id="processor" name="processor" placeholder="Procesador" value="{{old('processor', $computer->processor )}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="operative_system" class="form-label">Sistema operativo</label>
                <input type="text" class="form-control" id="operative_system" name="operative_system" placeholder="Sistema operativo" value="{{old('operative_system', $computer->operative_system)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="date_creation" class="form-label">Fecha creación</label>
                <input type="datetime-local" class="form-control" id="date_creation" name="date_creation" placeholder="Fecha creación" value="{{old('date_creation', $computer->date_creation)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="graphic_memory" class="form-label">Memoria grafica</label>
                <input type="number" class="form-control" id="graphic_memory" name="graphic_memory" placeholder="Memoria grafica" value="{{old('graphic_memory', $computer->graphic_memory)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="categorie_id" class="form-label">Id de categoria</label>
                <input type="number" class="form-control" id="categorie_id" name="categorie_id" placeholder="Id de categoria" value="{{old('categorie_id', $computer->categorie_id)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="image" class="form-label">Url imágen</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Imágen" value="{{old('image', $computer->image)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Precio" value="{{old('price', $computer->price)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" placeholder="description">{{old('description', $computer->description)}}</textarea>
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