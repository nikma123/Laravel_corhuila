@extends("theme/principal")
@section('titulo')
Listado Herramientas
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
      <h3 class="card-title">Listado de Herramientas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive-sm">
        <table id="datos" class="table table-hover">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Marca equipo</th>
              <th>Modelo</th>
              <th># serie </th>
              <th>Cantidad</th>
              <th>Costo U</th>
              <th>Fecha registro</th>
              <th>Estado</th>
              <th class="text-info">Evento</th>
            </tr>
          </thead>
          <tbody>
            @foreach(herramientas() as $her)
            <tr>
              <td>{{$her->id}}</td>
              <td>{{$her->mrcEquipo}}</td>
              <td>{{$her->mod}}</td>
              <td>{{$her->NoSerie}}</td>
              <td>{{$her->cantidad}}</td>
              <td>{{$her->costUnidad}}</td>
              <td>{{$her->fechaIngreso}}</td>
              <td>{{$her->estado}}</td>
              <td>
                <form action="{{url('/herremientas',$her->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{method_field('DELETE')}}
                  <button class="btn btn-primary" type="submit" onclick="return confirm('Borrar')">Borrar</button>
                </form>
              </td>
              <td>
                <form action="{{url('/herremientas/'.$her->id.'/edit') }}" method="">
                  <button class="btn btn-primary" type="submit" >Editar</button>
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