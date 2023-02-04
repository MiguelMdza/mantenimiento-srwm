<x-principal-layout>
    <x-nav-bar />
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- New Ingrediente Modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nuevo Ingrediente
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ingredienteStore') }}" method="POST">
                        <div class="">
                            @csrf
                            <div class="form-group">
                                <label for="nombre_ingr" class="form-label">Nombre</label>
                                <input class="form-control" type="text" id="nombre_ingr" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="cant_ingred" class="form-label">Cantidad disponibles en almacen</label>
                                <input class="form-control" type="number" id="cant_ingred" name="cantidad" required min="1">
                            </div>
                            <div class="form-group">
                                <label for="costo" class="form-label">Costo</label>
                                <input class="form-control" type="number" id="cost_ingred" name="costo" required min="1">
                            </div>
                            <div class="form-group">
                                <label for="cant_ingred" class="form-label">Proveedor que lo suministra</label>
                                <select name="idProveedor" id="select-proveedor">
                                    <option value="null" id="opc-sinProveedor">Sin Proveedor</option>
                                    <!--Rellenar proveedores -->
                                    @foreach ($proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Añadir">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Buscar Ingrediente
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="resetForm()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="No. de Ingrediente"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" id="tf-search-ingr"
                            onclick="resetForm()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="btn-search-ingr"
                                onclick="findIngredienteById()">Buscar</button>
                        </div>
                    </div>
                    <div class="container" id="informacion-ingred" hidden>
                        <p id="id-ingrediente">Ingrediente No. #</p>
                        <div class="info-mesa" id="div-info-ingr">
                            <form action="{{ route('ingredienteUpdate') }}" method="POST" id="form-ingr"
                                onkeypress="return disableEnterKey(event)">
                                @csrf
                                <input type="hidden" name="id" id="hd-id-ingr">
                                <div class="form-group">
                                    <label for="nombre_ingr" class="form-label">Nombre</label>
                                    <input class="form-control" type="text" id="tf_nombre_ingr" name="nombre" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="cant_ingred" class="form-label">Cantidad disponibles en
                                        almacen</label>
                                    <input class="form-control" type="number" id="cant_ingr" name="cantidad" min="0" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="costo" class="form-label">Costo</label>
                                    <input class="form-control" type="number" id="costo_ingr" name="costo" min="0" readonly required>
                                </div>
                                <div class="form-group">
                                    <label for="cant_ingred" class="form-label">Proveedor que lo suministra</label>
                                    <select name="idProveedor" id="select_proveedor" class="form-select" disabled>
                                        <option value="null" id="proveedor_id_0">Sin Proveedor</option>
                                        <!--Rellenar proveedores -->
                                        @foreach ($proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}" id="proveedor_id_{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="opc-mesa" class="form-check-input" id="edit_info"
                                onchange="editInformacion()">
                            <label class="form-check-label" for="ck-edit-info">Editar</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-guardar-ingred" class="btn btn-primary" data-dismiss="modal" hidden
                        onclick="sendFormIngr()">Guardar</button>
                    <span></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="resetForm()">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal">
                Agregar Ingrediente Nuevo
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editModal">
                Editar informacion de Ingrediente
            </button>
        </div>
        <br>
        <!--<a class="btn btn-primary float-right" href="">Agregar nuevo ingrediente</a>-->
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('cantidad')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('costo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <h2 class="h2 d-inline">Ingredientes</h2>
        <table class="table table-responsive table-dark text-center">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">ID</th>
                    <th scope="col" style="width: 30%">Nombre</th>
                    <th scope="col" style="width: 20%">Cantidad en existencia</th>
                    <th scope="col" style="width: 20%">Precio de proveedor</th>
                    <th scope="col" style="width: 20%">Opciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredientes as $ingrediente)
                    <tr>
                        <td>{{ $ingrediente->id }}</td>
                        <td>{{ $ingrediente->nombre }}</td>
                        <td>{{ $ingrediente->cantidad }}</td>
                        <td>${{ $ingrediente->costo }}</td>
                        <td>
                            <a class='btn btn-lg btn-primary mx-1' href="{{route('ingredienteDelete', $ingrediente->id)}}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/ingredientes.js') }}"></script>
</x-principal-layout>
