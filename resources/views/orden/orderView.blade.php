<x-principal-layout>
    <x-nav-bar />
    <link rel="stylesheet" href="{{ asset('css/orderView.css') }}">
    <link src="{{asset('css/dataTables.bootstrap5.min.css')}}"/>
    <!-- Page content-->
    <div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
                Fecha: <br>
                <?php date_default_timezone_set('America/Mexico_City');?>
                {{ date('d/m/Y H:H:s') }}
            </div>
            <div class="card-body">
                <h2 class="card-tittle">Mesa No. {{ $mesa->id }}</h2>
                <h5 class="card-title">Orden No. {{ $orden[0]->id }}</h5>
                <a class="btn btn-primary float-right" href="#Menu" >Menu</a>
                <table class="table table-responsive" id="tableContent">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 5%">#</th>
                            <th scope="col" style="width: 50%">Platillo</th>
                            <th scope="col" style="width: 15%">Cantidad</th>
                            <th scope="col" style="width: 20%">Subtotal</th>
                        </tr>
                    </thead>
                        <?php $i = 0?>
                        @foreach ($orden[0]->platillos as $platillo)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$platillo->nombre}}</td>
                            <td>{{$platillo->pivot->cant}}</td>
                            <td>{{$platillo->pivot->subtotal}}</td>
                        </tr>
                        @endforeach
                    <tbody>
                    </tbody>
                </table>
                <a href="{{route('cerrarOrden', ['id_mesa' => $mesa->id,'id_orden' => $orden[0]->id])}}" class="btn btn-secondary" id="btnCerrarOrden">Cerrar orden</a>
            </div>
            <div class="card-footer text-muted">
                Siempre servicial, siempre atento
            </div>
        </div>
    </div>
    <div class="container mx-auto" style="background: #ffffff;border-radius: 8px;" id="Menu">
        <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
        <input type="radio" id="HTML" name="categories" value="HTML">
        <input type="radio" id="CSS" name="categories" value="CSS">

        <div class="container-category">
            <label for="TODOS">TODOS</label>
            <label for="HTML">PLATILLOS</label>
            <label for="CSS">BEBIDAS</label>
        </div>
        <div class="posts">
            @foreach ($platillos as $platillo)
                <div class="post" data-category="{{ $platillo->tipo_alimento_id == 1 ? 'HTML' : 'CSS' }}">
                        <div class="card text-center m-2">
                            <div class="card-header card-title h2">
                                {{ $platillo->nombre }}
                            </div>
                            <div class="form-group">
                                <form action="{{route('ordenAddPlatillo')}}" method="POST" id="form_add_plato{{$platillo->id}}" onsubmit="event.preventDefault(); document.getElementById('{{$platillo->id}}').click();">
                                    @csrf
                                    <input type="hidden" name="id_mesa" id="id_mesa" value="{{$mesa->id}}">
                                    <input type="hidden" name="id_usuario" id="id_usuario" value="{{0}}">
                                    <input type="hidden" name="id_orden" id="id_orden" value="{{$orden[0]->id}}">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                    <input type="hidden" name="id_platillo" id="id_platillo{{$platillo->id}}" value="{{$platillo->id}}">
                                    <input type="hidden" name="nombre" id="nombre{{$platillo->id}}" value="{{$platillo->nombre}}">
                                    <input type="hidden" name="precio" id="precio{{$platillo->id}}" value="{{$platillo->precio}}">
                                    <input class="form-control" type="number" name="cantidad" id="cantidad{{$platillo->id}}" value=""
                                        placeholder="Cantidad" min="1" required>
                                    <input type="hidden" class="form-control" name="comentarios" id="comentarios{{$platillo->id}}"
                                        placeholder="Comentarios">
                                    <p class="btn btn-primary form-control" id="{{$platillo->id}}" onclick="agregarPlatillo(this)">Agregar</p>
                                </form>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
        <!-- Core theme JS-->
        <script src=" {{ asset('js/jquery-3.6.0.js') }}"></script>
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{ asset('js/ordenView.js') }}"></script>
</x-principal-layout>
