<x-principal-layout>
    <x-nav-bar/>

    <div class="container">
        @if (!isset($proveedor) && !isset($proveedor->id))
            <h1>Nuevo proveedor</h1>
        @else
            <h1>Proveedor No. {{$proveedor->id}}</h1>
        @endif
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('proveedorStore')}}">
            @csrf
            <input type="hidden" name="id" @if (isset($proveedor) && isset($proveedor->id))
            value="{{ $proveedor->id }}"
            @endif
            >
            <div class="form-group">
                <label for="platillo-name">Nombre del Proveedor</label>
                <input type="text" name="nombre" class="form-control"
                    placeholder="Nombre del proveedor" @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->nombre }}"
                @endif
                required>
            </div>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" class="form-control" id="platillo-name" placeholder="RFC"
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->rfc }}"
                @endif>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion"
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->direccion }}"
                @endif>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" class="form-control" placeholder="Email"
                    @if (isset($proveedor) && isset($proveedor->id))
                value="{{ $proveedor->contacto }}"
                @endif>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</x-principal-layout>
