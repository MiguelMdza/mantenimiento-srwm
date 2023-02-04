<x-principal-layout>
    <x-nav-bar />
    <link src="{{asset('css/dataTables.bootstrap5.min.css')}}"/>

    @error('platillo_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('platillo_precio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="container">
        @if (!isset($platillo) && !isset($platillo->id))
            <h1>Nuevo platillo</h1>
        @else
            <h1>Proveedor No. {{$platillo->id}}</h1>
        @endif
        <div class="d-flex justify-content-center">
        </div>
        <form action="{{ route('platilloStore')}}" method="POST" id="form_platillo">
            @csrf
            <input type="hidden" name="id" @if (isset($platillo) && isset($platillo->id))
            value="{{ $platillo->id }}"
            @endif
            required>
            <div class="form-group">
                <label for="formFile" class="form-label">Tipo de Platillo</label>
                <select name="tipo_alimento" id="" class="form-control">
                    @foreach ($tipoAlimento as $tipo)
                        <option value="{{$tipo->id}}"
                            @if (isset($platillo) && $platillo->tipo_alimento_id == $tipo->id)
                                selected
                            @endif>{{$tipo->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="platillo-name">Nombre del platillo</label>
                <input type="text" name="platillo_name" class="form-control" id="platillo-name"
                    placeholder="Nombre de platillo" @if (isset($platillo) && isset($platillo->id))
                value="{{ $platillo->nombre }}"
                @endif
                required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del platillo</label>
                <textarea name="descripcion" class="form-control" id="descripcion" rows="3">@if (isset($platillo) && isset($platillo->id)){{ $platillo->descripcion }}@endif</textarea>
            </div>
            <div class="form-group">
                <label for="platillo_precio">Precio del platillo</label>
                <input type="number" name="platillo_precio" class="form-control" id="platillo_precio" placeholder="0.0"
                    @if (isset($platillo) && isset($platillo->id))
                        value="{{ $platillo->precio }}"
                @endif required min="1">
            </div>
            <label for="">Ingredientes del platillo</label>
            <div class="form-group">
                <select class="form-select" id="select_ingrediente_add">
                    @foreach ($ingredientes as $ingrediente)
                    <option value="{{$ingrediente->id}}" class="dropdown-item">{{$ingrediente->nombre}}</option>
                    @endforeach
                </select>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Cantidad que usa</label>
                    </div>
                    <input type="number" class="form-control" id="ingrediente_cant_add">
                    <button class="btn btn-outline-primary" id="btn_ingrediente_add">Agregar</button>
                </div>
            </div>
            <table class="table table-responsive table-dark table-striped text-center display" id="ingr_table">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%">ID</th>
                        <th scope="col" style="width: 45%">Ingrediente</th>
                        <th scope="col" style="width: 45%">Cantidad que usa</th>
                        <th scope="col" style="width: 45%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($platillo) && isset($platillo->id) && count($platillo->ingredientes) != 0)
                    @foreach ($platillo->ingredientes as $ingrediente)
                        <tr class="even">
                            <td class="sorting_1">{{ $ingrediente->pivot->ingrediente_id }}</td>
                            <td>{{ $ingrediente->nombre }}</td>
                            <td>
                                {{ $ingrediente->pivot->cant_usa }}
                            </td>
                            <td>
                                <span class='btn btn-lg btn-primary mx-1' id="btnBorrar">
                                    <i class="fas fa-trash-alt" id="btnBorrar"></i>
                                </span>
                            </td>
                            <input type="hidden" id="ingrediente_id" name="ingrediente_id[]" value="{{$ingrediente->id}}">
                            <input type="hidden" id="ingrediente_cant_usa" name="ingrediente_cant_usa[]" value="{{$ingrediente->pivot->cant_usa}}">
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <input class="btn btn-primary" type="submit" value="Guardar" id="btnSubmit" onclick="eliminarIngrediente()"/>
        </form>
    </div>

    <script src=" {{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/platillos.js')}}"></script>
</x-principal-layout>
