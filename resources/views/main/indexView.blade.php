<x-principal-layout>
    <x-nav-bar />

    <div class="container" style="background: #ffffff;border-radius: 8px;">
        <div class="container">
            <div class="row">
                @foreach ($platillos as $platillo)
                    <div class="col-sm-4">
                        <x-platillo-card nombre="{{ $platillo->nombre }}" descripcion="{{$platillo->descripcion}}" precio="{{$platillo->precio}}"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-principal-layout>
