@extends('plantilla')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>SGT</b>uricun</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Inicia sesión</p>

            <form action="{{route('login') }}" method="post">

                @csrf

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>

                        @error('email')
                        <br>
                        <div class="alert alert-danger" id="ocultar">Error de credenciales</div>

                        @enderror
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Recordarme
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
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
    </div>
</div>
<!-- /.login-box -->


@endsection