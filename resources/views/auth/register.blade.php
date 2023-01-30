@extends('layouts.app')



<!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

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

                        <div class="form-group row" id="mensaje_error">
                            <div class="alert alert-danger alert-dismissible " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span>
                                </button>
                                <strong>El correo ingresado ya existe</strong>
                            </div>
                        </div>




                        <div class="form-group row">


                        <input id="fecha_nacimiento" class="form-control"  type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento *" value="{{ old('fecha_nacimiento') }}">
                            @error('fecha_nacimiento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">


                        <input id="dui" class="form-control"  type="text" name="dui" placeholder="DUI *" value="{{ old('dui') }}" data-inputmask="'mask': ['99999999-9']">
                            @error('dui')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">


                            <select name="genero" id="genero" class="form-control" required>
                                <option disabled selected value="">Genero *</option>
                                <option value="1" {{ old('genero') == 1 ? 'selected' : '' }}>Femenino</option>
                                <option value="2" {{ old('genero') == 2 ? 'selected' : '' }}>Masculino</option>
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

                            <input id="talla" type="number" step="0.01" class="form-control" name="talla" placeholder="Estatura * mts" value="{{ old('talla') }}" required autocomplete="talla"  autofocus>

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
                        
                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Registrar</span><i class="icon-right-arrow"></i></button>
                        </div>
<br>
                        <div class="form-group row">
                        <div class="h-decor"></div>
                        <br>
                            <h6  ><i class="fa fa-warning"></i> Estimado Paciente, recibirá un correo electronico de confirmación para continuar con nuestros servicios</h6>
                            <div class="h-decor"></div>

                        </div>


                        <!-- <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div> -->
                      
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


<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>



<!-- Custom Theme Scripts -->
<script src="{{ asset('build/js/custom.min.js') }}"></script>


<!-- mascara de entrada -->
<script src="{{ asset('vendors/input-mask/jquery.inputmask.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#mensaje_error').hide();

        $("#email").change(function() {
            var parametros = {
                "email": document.getElementById('email').value
            };
            $.ajax({
                type: "get",
                //ruta para obtener el horario del doctor
                url: "{{ url('validation_email') }}",
                data: parametros,
                success: function(data) {
                    console.log(data);
                    if (data == 1) {
                        $('#mensaje_error').show();
                    } else {
                        $('#mensaje_error').hide();
                    }
                    //$('#data').html(data);
                }
            });
        });
    });
</script>

<script>
    $(function() {
           $('[data-mask]').inputmask()
    });
</script>
@endsection
