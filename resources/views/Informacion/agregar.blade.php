@extends("theme/principal")
@section('titulo')
Informacion de Herramientas
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
            <h4>Registro de la informacion de las herramientas</h4>
        </div>
        <form action="{{url('/info') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombreHerr"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Nombre Herramienta '}}
                                </b></label>
                            <select id="my-select" class="custom-select" name="nombreHerramienta" id="nombreHerramienta">
                                <option>{{'--Seleccionar--'}}</option>
                                @foreach(herramientas() as $her)
                                <option value="{{$her->mrcEquipo}}">{{$her->mrcEquipo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="form-group">
                            <label for="fecha"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Fecha ingreso '}}
                                </b></label>
                            <input class="form-control" type="date" name="fechaIngreso" id="fechaIngreso">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombreHerr"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{' Nombre encargado '}}
                                </b></label>
                            <select id="my-select" class="custom-select" name="nombreEncargado" id="nombreEncargado">
                                <option>{{'--Seleccionar--'}}</option>
                                @foreach(trabajadores() as $her)
                                <option value="{{$her->nombre}}">{{$her->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="estado">{{'Estado'}}</label>
                                <select id="estado" class="custom-select" name="estado">
                                    <option>{{'En trabajo'}}</option>
                                    <option>{{'Mantenimiento'}}</option>
                                    <option>{{'Bodega'}}</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="direccion"><i class="fa fa-list-ol" aria-hidden="true"></i><b> {{'Direccion '}}
                                    </b></label>
                                <input class="form-control" type="text" name="ubicacion" id="ubicacion" value=""
                                    placeholder="Direccion">
                            </div>
                        </div>
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