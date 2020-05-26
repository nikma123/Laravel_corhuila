@extends("theme/principal")
@section('titulo')
Listado Menu
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
      <h3 class="card-title">Listado de Empleados</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table id="datos" class="table table-hover">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Nombre Completo</th>
            <th>No. Cedula</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Area de Trabajo</th>
            <th>Fecha Ingreso</th>
            <th>Fecha Retiro</th>
          </tr>
        </thead>
        <tbody>
          @foreach(herramientas() as $her)
          <tr>
            <td>{{$her->id}}</td>
            <td>{{$her->nombre}}</td>
            <td>{{$her->cedula}}</td>
            <td>{{$her->direccion}}</td>
            <td>{{$her->telefono}}</td>
            <td>{{$her->area}}</td>
            <td>{{$her->fechaIngreso}}</td>
            <td>{{$her->fechaSalida}}</td>
            <td>
              <form action="{{url('/herremientas',$her->id) }}" method="POST">
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
@endsection