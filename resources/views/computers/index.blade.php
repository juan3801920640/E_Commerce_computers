@extends("layouts.app")
@section("content")
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{asset('storage/images/logo.jpg')}}" alt="Logo" style="width:98px;height:80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sección de Productos -->
    <div class="container mt-5">
        <div class="row">
            <!-- Ejemplo de una tarjeta de producto -->
            @foreach($computers as $computer)
                <div class="col-md-4 mt-4">
                    <div class="card" style="height: 570px;">
                        <img src="{{asset('storage/'.$computer->image)}}" class="card-img-top" alt="Imagen del Producto">
                        <div class="card-body">
                            <h5 class="card-title">{{$computer->brand}}</h5>
                            <p class="card-text">{{$computer->description}}</p>
                            <h6>Precio: ${{$computer->price}}</h6>
                            <a href="{{route('computers.show', $computer)}}" class="btn btn-primary">Ver más</a>
                            <a href="#" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Repetir la tarjeta anterior para cada producto -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-4 p-4 text-center">
        Derechos reservados © 2024
    </footer>

@endsection
