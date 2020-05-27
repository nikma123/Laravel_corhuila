@extends("theme/principal")
@section('titulo')
Editar Proveedores
@endsection
@section('contenido')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Editar Proveedor</h4>
        </div>
        <form action="{{url('/proveedor/'.$proveedor->id)}}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="razon"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Razon Social '}}</b></label>
                            <input class="form-control" type="text" id="razon" name="razon" value="{{$proveedor->razon}}"
                                placeholder="Razón Social">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="nit"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Nit / Cif '}}
                                </b></label>
                            <input class="form-control" type="text" name="nit" id="nit" value="{{$proveedor->nit}}"
                                placeholder="Nit / Cif">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="direccion"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{'Direccion '}}
                                </b></label>
                            <input class="form-control" type="text" name="direccion" id="direccion" value="{{$proveedor->direccion}}"
                                placeholder="Direccion">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Telefono '}}</b></label>
                            <input class="form-control" type="text" id="telefono" name="telefono" value="{{$proveedor->telefono}}"
                                placeholder="Nombre de menu">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="especialidad"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Especialidad '}} </b></label>
                            <input class="form-control" type="text" name="especialidad" id="especialidad" value="{{$proveedor->especialidad}}"
                                placeholder="Especialidad">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <button type="submit" class='btn btn-primary ml-2 mb-2'>Editar</button>
    </div>
    </form>
</div>
</div>

@endsection