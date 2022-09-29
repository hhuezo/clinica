@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" style="background-color: #e3e9f1; border-radius: 25px;">
            <div class="">
                <br>
                <h3>Registrar</h3>
                <div class="h-decor"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        <!-- <form method="POST" action="{{ url('seguridad/user') }}"> -->
                        @csrf

                        <div class="form-group row">

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nombre *" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">


                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico *" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">


                        <input id="fecha_nacimiento" class="form-control"  type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento *">
                            @error('fecha_nacimiento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">


                            <select name="genero" id="genero" class="form-control">
                                <option disabled selected>Genero *</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                                <!-- <option value="3">No Determinado</option> -->
                            </select>
                        </div>
                        <div class="form-group row">

                            <input id="telefono" type="text" class="form-control" name="telefono" placeholder="Telefono *" value="{{ old('telefono') }}" required autocomplete="telefono" data-inputmask="'mask': ['9999-9999']" data-mask autofocus>

                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group row">

                            <input id="peso" type="number" step="0.01" class="form-control" name="peso" placeholder="Peso * lbs" value="{{ old('peso') }}" required autocomplete="peso" autofocus>

                            @error('peso')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group row">

                            <input id="talla" type="number" step="0.01" class="form-control" name="talla" placeholder="Talla *" value="{{ old('telefono') }}" required autocomplete="talla"  autofocus>

                            @error('talla')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        
                        

                        <div class="form-group row">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña *" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña *" required autocomplete="new-password">

                        </div>

                        <input name="rol" class="form-control" value="4" type="hidden">


                        <br>
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Registrar</span><i class="icon-right-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    window.addEventListener('load', function() {
            document.getElementById('fecha_nacimiento').type = 'text';
            document.getElementById('fecha_nacimiento').addEventListener('blur', function() {
            document.getElementById('fecha_nacimiento').type = 'text';
        });
            document.getElementById('fecha_nacimiento').addEventListener('focus', function() {
            document.getElementById('fecha_nacimiento').type = 'date';

        });

    });
</script>
@endsection