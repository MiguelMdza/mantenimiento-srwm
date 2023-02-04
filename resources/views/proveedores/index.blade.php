<x-principal-layout>
    <x-nav-bar/>

    <div class="container">
        <a class="btn btn-primary float-right" href="{{ route('proveedorCreate') }}">Agregar nuevo proveedor</a>
        <h2 class="h2 d-inline">Proveedores</h2>
        <table class="table table-responsive table-dark text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">Nombre</th>
                    <th scope="col" style="width: 20%">RFC</th>
                    <th scope="col" style="width: 20%">Dirección</th>
                    <th scope="col" style="width: 20%">Contacto</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->rfc }}</td>
                        <td>{{ $proveedor->direccion }}</td>
                        <td>{{ $proveedor->contacto }}</td>
                        <td class="d-flex justify-content-center">
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('proveedorEdit', $proveedor->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('proveedorDelete', $proveedor->id, ) }}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            @if (isset($proveedor->contacto))
                            <a class='btn btn-lg btn-primary mx-1' href="{{ route('proveedorMail', ['id'=>$proveedor->id]) }}">
                                <i class="fas fa-envelope"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-principal-layout>
