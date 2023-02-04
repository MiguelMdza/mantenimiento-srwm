<x-principal-layout>
    <x-nav-bar/>
    <div class="container">
        <!--<div class="form-row">
            <div class="form-group col-md-6">
                <label for="fecha1">Fecha Inicial</label>
                <input type="date" value="{{$fecha1}}" class="form-control" onchange="getOrdenesByFecha()">
            </div>
            <div class="form-group col-md-6">
                <label for="">Fecha final</label>
                <input type="date" value="{{$fecha2}}" class="form-control" onchange="getOrdenesByFecha()">
            </div>
        </div>-->
        <table class="table table-responsive table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">No. de Orden</th>
                    <th scope="col" style="width: 40%">Mesa</th>
                    <th scope="col" style="width: 20%">Total</th>
                    <th scope="col" style="width: 20%">Ver detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenes as $orden)
                    <tr>
                        <th scope="row">{{$orden->id}}</th>
                        <td>{{$orden->mesa_id}}</td>
                        <?php $total = 0;?>
                        @foreach ($orden->platillos as $platillo)
                            <?php $total = $total + $platillo->pivot->subtotal; ?>
                        @endforeach
                        <td>{{$total}}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="{{route('ordenDetalle',[$orden->mesa_id, $orden->id])}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-principal-layout>
