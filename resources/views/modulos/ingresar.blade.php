@extends('plantilla')
<<!-- img src="{{ url('storage/fondo.jpeg') }}"  > -->
@section('content')
<!-- width="150px" heigth="150px" alt="User Image" -->
<div class="login-box login-page">
  <div class="login-logo">
  <a><b>SGT</b>uricun</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicio de sesión</p>

      <form action="{{route('login') }}" method="post">

      @csrf

        <div class="input-group mb-3">
          <input type="email" name="email"  class="form-control" placeholder="Email" value="" required="">
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>

            

          </div>
        </div>
        @error('email')
              
              <div class="alert alert-danger ">Error con correo o contraseña..</div>

            @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>

      </form>
      <p class="mb-1">
                <a href="forgot-password.html">Olvidé mi contraseña</a>
            </p>
            <p class="mb-0">
                <a href="register" class="text-center">Registra nuevo usuario</a>
            </p>

    </div>
    <!-- /.login-card-body -->
 

@endsection