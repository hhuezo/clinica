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
                        <input type="text" name="Paciente" value="{{$cita->paciente->name}}" class="form-control" readonly>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="Fecha" value="{{$cita->Fecha}}" class="form-control" required>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Horario</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Horario" id="Doctor">
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
@endsection
