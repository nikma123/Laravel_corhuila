@extends("theme/principal")
@section('titulo')
Registro de Calibracion
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
            <h4>Registro de nueva Calibracion</h4>
        </div>
        <form action="{{url('/herremientas') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="form-group">
                            <label for="descripcion"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Descripcion Calibracion '}}</b></label>
                            <input class="form-control" type="text" id="descripcion" name="descripcion" value=""
                                placeholder="Descripcion de calibracion">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="tiempo"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Tiempo Aproximado '}}
                                </b></label>
                            <input class="form-control" type="number" name="tiempo" id="tiempo" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="costo"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Costo '}}
                                </b></label>
                            <input class="form-control" type="number" name="costo" id="costo" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="serial"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' No. serial '}}</b></label>
                            <input class="form-control" type="number" id="serial" name="serial" value=""
                                placeholder="Nombre de menu">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="numero"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' No. certifiaco calibracion '}} </b></label>
                            <input class="form-control" type="number" name="numero" id="numero" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="fechaIngreso"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Fecha del certificado '}} </b></label>
                            <input class="form-control" type="date" name="fechaIngreso" id="fechaIngreso" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="fechaSalida"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Fecha de vencimiento'}} </b></label>
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