<style>
    * {
    font-size: 12px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.producto,
th.producto {
    width: 75px;
    max-width: 75px;
}

td.cantidad,
th.cantidad {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.precio,
th.precio {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

.centrado {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 155px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}
</style>
<div class="ticket">
    <img
        src="{{asset('img/logo.png')}}"
        alt="Logotipo">
    <p class="centrado">
        {{ date('d/m/Y')}} <br>
        {{ date('H:i:s')}} Hrs
    </p>
    <p class="centrado">
        Mesa: {{ $mesa->id }} <br>
        Orden No. {{ $orden[0]->id }}
    </p>
    <table>
        <thead>
            <tr>
                <th class="cantidad">#</th>
                <th class="producto">PRODUCTO</th>
                <th class="producto">CANT</th>
                <th class="precio">$$</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            @foreach ($orden[0]->platillos as $platillo)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$platillo->nombre}}</td>
                <td>{{$platillo->pivot->cant}}</td>
                <td>{{$platillo->pivot->subtotal}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td class="cantidad"></td>
                <td class="producto">TOTAL</td><?php $total = 0;?>
                @foreach ($orden[0]->platillos as $platillo)
                    <?php $total = $total + $platillo->pivot->subtotal; ?>
                @endforeach
                <td class="total">{{$total}}</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <p class="centrado">¡GRACIAS POR SU VISITA!
        </p>
</div>
<script>
    function printHTML() {
    if (window.print) {
        window.print();
    }
}
document.addEventListener("DOMContentLoaded", function(event) {
  printHTML();
});
</script>
