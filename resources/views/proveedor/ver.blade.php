@extends("theme/principal")
@section('titulo')
Listado Provedore
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
      <h3 class="card-title">Listado de proveedores</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive-sm">
        <table id="datos" class="table table-hover">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Razon social</th>
              <th>Nit</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Especialidad</th>
              <th class="text-info">Evento</th>
            </tr>
          </thead>
          <tbody>
            @foreach(proveedores() as $her)
            <tr>
              <td>{{$her->id}}</td>
              <td>{{$her->razon}}</td>
              <td>{{$her->nit}}</td>
              <td>{{$her->direccion}}</td>
              <td>{{$her->telefono}}</td>
              <td>{{$her->especialidad}}</td>
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

</div>
@endsection