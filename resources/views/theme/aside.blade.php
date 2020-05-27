<aside class="main-sidebar sidebar-dark-primary elevation-4">
 

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              {{'Herramientas'}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ver-herramienta') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{'Ver registradas'}}</p>
              </a>
            </li>
           
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              {{'Provedores'}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ver-proveedor') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{'Ver provedores'}}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              {{'Calibracion'}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ver-calibracion') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{'Ver calibradas'}}</p>
              </a>
            </li>
           
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              {{' Trabajadores '}}
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('ver-trabajadores') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>{{' Ver trabajadores'}}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">NUEVO REGISTRO</li>
        <li class="nav-item">
          <a href="{{route('agregar-herramienta')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-success"></i>
            <p class="text">{{'Herramientas'}}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('agregar-proveedor')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>{{'Proveedores'}}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('agregar-trabajadores')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>{{'Trabajadores'}}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('calibracion')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p>{{'Calibracion'}}</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>