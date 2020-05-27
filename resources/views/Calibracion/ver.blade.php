@extends("theme/principal")
@section('titulo')
Listado Calibracion
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
      <h3 class="card-title">Listado de Calibracion</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="table-responsive-sm">
        <table id="datos" class="table table-hover">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Descripcion</th>
              <th>tiempo </th>
              <th>Costo</th>
              <th>Numero de certificado</th>
              <th>Serial del equipo</th>
              <th>Fecha Certificado</th>
              <th>Fecha de vencimiento</th>
              <th class="text-info">Evento</th>
            </tr>
          </thead>
          <tbody>
            @foreach(Calibracion() as $cal)
            <tr>
              <td>{{$cal->id}}</td>
              <td>{{$cal->descripcion}}</td>
              <td>{{$cal->tiempo}}</td>
              <td>{{$cal->costo}}</td>
              <td>{{$cal->numero}}</td>
              <td>{{$cal->serial}}</td>
              <td>{{$cal->fechaIngreso}}</td>
              <td>{{$cal->fechaSalida}}</td>
              <td>
                <form action="{{url('/calibracion',$cal->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{method_field('DELETE')}}
                  <button class="btn btn-primary" type="submit" onclick="return confirm('Borrar')">Borrar</button>
                </form>
              </td>
              <td>
                <form action="{{url('/calibracion/'.$cal->id.'/edit') }}" method="">
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