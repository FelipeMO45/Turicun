<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('Inicio')}}" class="brand-link">
        <i class="fas fa-book"></i>
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
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Vehiculos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('Clientes')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Conductores
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Rutas
                        </p>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>
                            Horarios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>
                            Empleados
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('usuarios')}}" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
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