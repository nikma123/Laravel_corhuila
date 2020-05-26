@extends("theme/principal")
@section('titulo')
Registro de Herramientas
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
            <h4>Registro de nueva herramienta</h4>
        </div>
        <form action="{{url('/herremientas') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Marca equipo '}}</b></label>
                            <input class="form-control" type="text" id="mrcEquipo" name="mrcEquipo" value=""
                                placeholder="Nombre de menu">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="cantidad"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Modelo '}}
                                </b></label>
                            <input class="form-control" type="text" name="mod" id="mod" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="noSerie"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' No serie '}}
                                </b></label>
                            <input class="form-control" type="text" name="Noserie" id="Noserie" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre"><i class="fa fa-address-card"
                                    aria-hidden="true"></i><b>{{' Cantidad '}}</b></label>
                            <input class="form-control" type="number" id="cantidad" name="cantidad" value=""
                                placeholder="Nombre de menu">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="cantidad"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Costo unidad '}} </b></label>
                            <input class="form-control" type="number" name="costUnidad" id="costUnidad" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="noSerie"><i class="fa fa-list-ol" aria-hidden="true"></i><b>
                                    {{' Fecha ingreso '}} </b></label>
                            <input class="form-control" type="date" name="fechaIngreso" id="fechaIngreso" value=""
                                placeholder="Cantidad a registrar">
                        </div>
                    </div>
                    <div class="col-md-12 ml-auto">
                        <div class="form-group">
                            <label for="noSerie"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Estado '}}
                                </b></label>
                            <select id="my-select" class="custom-select" name="estado" id="estado">
                                <option>{{'--Seleccionar--'}}</option>
                                <option value="1">{{'Activo'}}</option>
                                <option value="2">{{'Inactivo'}}</option>
                            </select>
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