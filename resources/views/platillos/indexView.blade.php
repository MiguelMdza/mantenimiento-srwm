<x-principal-layout>
    <x-nav-bar />

    <!--<link src="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>-->
    <link src="{{asset('css/dataTables.bootstrap5.min.css')}}"/>
    <div class="container">
        <br>

        <a class="btn btn-primary float-right" href="{{ route('platilloCreate') }}">Agregar nuevo platillo</a>
        <h2 class="h2 d-inline">Alimentos</h2>
        <table class="table table-responsive table-dark table-striped text-center" id="alimentos_table">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">ID</th>
                    <th scope="col" style="width: 20%">Platillo</th>
                    <th scope="col" style="width: 40%">Descripción</th>
                    <th scope="col" style="width: 10%">Precio</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alimentos as $alimento)
                    <tr>
                        <th scope="row">{{ $alimento->id }}</th>
                        <th scope="row">{{ $alimento->nombre }}</th>
                        <td>{{ $alimento->descripcion }}</td>
                        <td>${{ $alimento->precio }}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('platilloEdit', $alimento->id)}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('platilloDelete', $alimento->id)}}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="h2 d-inline">Bebidas</h2>
        <table class="table table-responsive table-dark table-striped text-center" id="bebidas_table">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">ID</th>
                    <th scope="col" style="width: 20%">Bebidas</th>
                    <th scope="col" style="width: 40%">Descripción</th>
                    <th scope="col" style="width: 10%">Precio</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bebidas as $bebida)
                    <tr>
                        <th>{{ $bebida->id }}</th>
                        <td>{{ $bebida->nombre }}</td>
                        <td>{{ $bebida->descripcion }}</td>
                        <td>${{ $bebida->precio }}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('platilloEdit', $bebida->id)}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('platilloDelete', $bebida->id)}}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src=" {{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <!--<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>-->
    <script src="{{asset('js/tablefilterPlatillos.js')}}"></script>
</x-principal-layout>
