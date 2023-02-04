<x-principal-layout>
    <x-nav-bar />
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- New Mesa Modal -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nueva Mesa
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('mesaStore') }}" method="POST">
                        <div class="">
                            @csrf
                            <div class="form-group">
                                <label for="formFile" class="form-label">Cantidad de personas</label>
                                <input class="form-control" type="number" id="cant_personas" name="cant_personas">
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
                        Buscar Mesa
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetForm()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="No. de Mesa" aria-label="Recipient's username" aria-describedby="basic-addon2" id="tf-search-mesa" onclick="resetForm()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="btn-search-mesa" onclick="findMesaById()">Buscar</button>
                        </div>
                    </div>
                    <div class="container" id="informacion-mesa" hidden>
                        <p id="id-mesa">Mesa No. #</p>
                        <div class="info-mesa" id="div-info-mesa">
                            <form action="{{route('mesaUpdate')}}" method="POST" id="form-mesa" onkeypress="return disableEnterKey(event)">
                                @csrf
                                <input type="hidden" name="id_mesa" id="hd-id-mesa">
                                <input type="number" name="cant_personas" id="tf-cant-personas" placeholder="Cantidad de personas" class="form-control" readonly>
                            </form>
                            <form action="{{route('mesaDelete')}}" method="POST" id="form-mesa-delete" hidden>
                                @csrf
                                <input type="hidden" name="id_mesa" id="hd-id-mesa-delete">
                            </form>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="opc-mesa" class="form-check-input" id="rad-edit-info" onchange="editInformacion(this)">
                            <label class="form-check-label" for="ck-edit-info">Editar</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="opc-mesa" class="form-check-input" id="rad-delete-info" onchange="editInformacion(this)">
                            <label class="form-check-label" for="ck-edit-info">Eliminar</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-guardar-mesa" class="btn btn-primary" data-dismiss="modal" hidden onclick="sendFormMesa()">Guardar</button>
                    <button type="button" id="btn-eliminar-mesa" class="btn btn-danger" data-dismiss="modal" hidden onclick="deleteMesa()">Eliminar</button>
                    <span></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm()">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @error('cant_personas')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal">
                Agregar Mesa Nueva
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editModal">
                Editar informacion de Mesa
            </button>
        </div>
        <br>
        <div class="row">
            @foreach ($mesas as $mesa)
                <div class="col-sm-4">
                    <x-mesa-card id="{{ $mesa->id }}" cant-personas="{{ $mesa->cant_personas }}"
                        disponible="{{ $mesa->disponible }}" />
                    <br>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{ asset('js/mesas.js')}}"></script>
</x-principal-layout>
