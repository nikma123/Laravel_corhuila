@extends("theme/principal")
@section('titulo')
Informacion Herramientas
@endsection
@section('contenido')
@if (session('status'))
<div class="alert alert-danger" role="alert">
  {{ session('status') }}
</div>
@endif
<div>
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Informacion de Herramientas</h3>
      <a href="{{ route('agregar-informacion') }}"><button type="submit" class="btn btn-primary d-flex float-right">Agregar</button></a>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive-sm">
        <table id="datos" class="table table-hover">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nombre Herramienta</th>
              <th>Fecha de ingreso</th>
              <th>Encargado</th>
              <th>estado</th>
              <th>Ubicacion</th>
              <th class="text-info">Evento</th>
            </tr>
          </thead>
          <tbody>
            @foreach(informacion() as $her)
            <tr>
              <td>{{$her->id}}</td>
              <td>{{$her->nombreHerramienta}}</td>
              <td>{{$her->fechaIngreso}}</td>
              <td>{{$her->nombreEncargado}}</td>
              <td>{{$her->estado}}</td>
              <td>{{$her->ubicacion}}</td>
              <td>
                <form action="{{url('/info',$her->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{method_field('DELETE')}}
                  <button class="btn btn-primary" type="submit" onclick="return confirm('Borrar')">Borrar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </div>
  </div>

</div>
@endsection