@extends("theme/principal")
@section('titulo')
Registro de Trabajador
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
            <h4>Registro de nuevo Trabajador</h4>
        </div>
        <form action="{{url('/trabajadores') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="form-group">
                            <label for="nombre"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Nombre Completo '}}</b></label>
                            <input class="form-control" type="text" id="nombre" name="nombre" value=""
                                placeholder="Nombre Completo">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="cedula"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' No. Cedula '}}
                                </b></label>
                            <input class="form-control" type="number" name="cedula" id="cedula" value=""
                                placeholder="CC.">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="direccion"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Direccion '}}
                                </b></label>
                            <input class="form-control" type="text" name="direccion" id="direccion" value=""
                                placeholder="Direccion">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="telefono"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Telefono '}} </b></label>
                            <input class="form-control" type="text" name="telefono" id="telefono" value=""
                                placeholder="Telefono">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="area"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Area De Trabajo '}} </b></label>
                            <input class="form-control" type="text" name="area" id="area" value=""
                                placeholder="Area de trabajo">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="fechaIngreso"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Fecha ingreso '}} </b></label>
                            <input class="form-control" type="date" name="fechaIngreso" id="fechaIngreso" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="fechaSalida"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Fecha Retiro '}} </b></label>
                            <input class="form-control" type="date" name="fechaSalida" id="fechaSalida" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class='btn btn-primary ml-2 mb-2'>Guardar</button>
    </div>
    </form>
</div>
</div>

@endsection