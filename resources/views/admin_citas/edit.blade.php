@extends ('menu')
@section('contenido')
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

    <div class="x_panel">
        <div class="clearfix"></div>
        <div class="row">
            <div class="x_title">
                <h2>Modificación de cita </h2>

                <ul class="nav navbar-right panel_toolbox">

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">


                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::model($cita, ['method' => 'PATCH', 'route' => ['admin_citas.update', $cita->Id]]) !!}
                {{ Form::token() }}
                <br />

                <input type="hidden" id="Id" value="{{ $cita->Id }}">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Doctor</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Doctor" id="Doctor">
                            @foreach ($doctores as $obj)
                                @if ($cita->Doctor == $obj->Id)
                                    <option value="{{ $obj->Id }}" selected>{{ $obj->Nombre }}</option>
                                @else
                                    <option value="{{ $obj->Id }}">{{ $obj->Nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Paciente</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Paciente" value="{{ $cita->paciente->name }}" class="form-control"
                            readonly>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="Fecha" id="Fecha" value="{{ $cita->Fecha }}" class="form-control"
                            required>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Horario</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Horario" id="Horario">
                            @foreach ($horarios as $obj)
                                @if ($cita->horario->Hora == $obj->Hora)
                                    <option value="{{ $obj->Id }}" selected>{{ $obj->Hora }}</option>
                                @else
                                    <option value="{{ $obj->Id }}">{{ $obj->Hora }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group" align="center">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a href="{{ url('admin_citas') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                </div>

                {!! Form::close() !!}

            </div>
            @include('sweet::alert')
        </div>
    </div>


    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#Fecha").change(function() {
                get_horarios();
            });
            $("#Doctor").change(function() {
                get_horarios();
            });

        });

        function get_horarios()
        {
            $('#response').html('<div><img src="../../../public/img/ajax-loader.gif"/></div>');
                var parametros = {
                    "Doctor": document.getElementById('Doctor').value,
                    "Fecha": document.getElementById('Fecha').value,
                    "Id": document.getElementById('Id').value
                };
                $.ajax({
                    type: "get",
                    url: "{{ url('get_horarios') }}",
                    data: parametros,
                    success: function(data) {
                        console.log(data);
                        var _select = ''
                        for (var i = 0; i < data.length; i++)
                            _select += '<option value="' + data[i].Id + '"  >' + data[i]
                            .Hora +
                            '</option>';
                        $("#Horario").html(_select);
                    }
                });
        }
    </script>
@endsection
