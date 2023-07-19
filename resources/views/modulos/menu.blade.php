<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('Inicio')}}" class="brand-link">
        <i class="fas fa-solid fa-shuttle-van"></i>
        <span class="brand-text font-weight-light">SGTuricun</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(auth()->user()->foto=="")
                <img src="{{url('storage/default.png')}}" class="img-circle elevation-2" alt="User Image">
                @else
                <img src="{{url('storage/'.auth()->user()->foto)}}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="{{url('MiPerfil')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('Inicio')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('vehiculos')}}" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            Vehiculos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('conductores')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user-tie"></i>
                        <p>
                            Conductores
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('rutas')}}" class="nav-link">
                        <i class="nav-icon fas fa-route"></i>
                        <p>
                            Rutas
                        </p>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{ url('horarios')}}" class="nav-link">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Horarios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('empleados')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-user-friends"></i>
                        <p>
                            Empleados
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('usuarios')}}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-users-cog"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>