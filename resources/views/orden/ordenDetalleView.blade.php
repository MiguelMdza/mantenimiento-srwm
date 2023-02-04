<x-principal-layout>
    <x-nav-bar />
    <link rel="stylesheet" href="{{ asset('css/orderView.css') }}">
    <link src="{{asset('css/dataTables.bootstrap5.min.css')}}"/>
    <!-- Page content-->
    <div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
                Fecha: <br>
                {{ $orden[0]->created_at }}
            </div>
            <div class="card-body">
                <h2 class="card-tittle">Mesa No. {{ $mesa->id }}</h2>
                <h5 class="card-title">Orden No. {{ $orden[0]->id }}</h5>
                <table class="table table-responsive" id="tableContent">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 5%">#</th>
                            <th scope="col" style="width: 50%">Platillo</th>
                            <th scope="col" style="width: 15%">Cantidad</th>
                            <th scope="col" style="width: 20%">Subtotal</th>
                        </tr>
                    </thead>
                        <?php $i = 1?>
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
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td><?php $total = 0;?>
                            @foreach ($orden[0]->platillos as $platillo)
                                <?php $total = $total + $platillo->pivot->subtotal; ?>
                            @endforeach
                            <td>{{$total}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer text-muted">
                Siempre servicial, siempre atento
            </div>
        </div>
    </div>
    <!-- Core theme JS-->
    <script src=" {{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('js/ordenView.js') }}"></script>
</x-principal-layout>
