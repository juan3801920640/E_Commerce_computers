@extends("layouts.base")
@section("content")
<body>
    <div class="container mt-4">
        <h1 class="mb-3">Detalle {{$computer->brand}}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('storage/'.$computer->image)}}" class="img-fluid" alt="Imagen del Computador">
            </div>
            <div class="col-md-6">
                <h2>Marca del Computador</h2>
                <p><strong>Procesador:</strong> {{$computer->processor}}</p>
                <p><strong>Memoria RAM:</strong> {{$computer->ram}} GB</p>
                <p><strong>Disco Duro:</strong> {{$computer->ram}} GB SSD</p>
                <p><strong>Núcleos:</strong> {{$computer->number_cores}}</p>
                <p><strong>Sistema Operativo:</strong> {{$computer->operative_system}}</p>
                <p><strong>Descripción:</strong> {{$computer->description}}</p>
                <a href="{{ route('computers.index') }}" class="btn btn-success btn-lg">Regresar</a>
                <a href="#" class="btn btn-primary btn-lg">Comprar Ahora</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h3>Especificaciones Técnicas</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Procesador</th>
                            <td>{{$computer->processor}}, {{$computer->number_cores}} núcleos</td>
                        </tr>
                        <tr>
                            <th scope="row">Memoria RAM</th>
                            <td>{{$computer->ram}} GB GB DDR4, 3200 MHz</td>
                        </tr>
                        <tr>
                            <th scope="row">Disco Duro</th>
                            <td>{{$computer->ram}} GB SSD PCIe</td>
                        </tr>
                        <tr>
                            <th scope="row">Sistema Operativo</th>
                            <td>{{$computer->operative_system}} 64-bit</td>
                        </tr>
                        <tr>
                        
                        @if (!empty($computer->cc_graphic_memory))
                            <th scope="row">Memoria Gráfica</th>
                            <td>{{$computer->cc_graphic_memory}} gb</td>
                        @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection