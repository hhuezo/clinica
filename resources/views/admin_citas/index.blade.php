@extends ('menu')
@section('contenido')
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
    <div class="x_panel">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

                <div class="x_title">
                    <h2>Citas<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                    </ul>
                    <div class="clearfix"></div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="x_content">
                    <br />
                    <form method="GET" action="{{ route('admin_citas.index') }}">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fecha Inicio</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" name="FechaInicio" id="FechaInicio" class="form-control"
                                    value="{{ date('Y-m-d') }}" autofocus="true">
                            </div>
                            <label class="col-sm-3 control-label">&nbsp;</label>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fecha Final</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" name="FechaFinal" id="FechaFinal" class="form-control"
                                    value="{{ date('Y-m-d') }}" autofocus="true">
                            </div>
                            <label class="col-sm-3 control-label">&nbsp;</label>
                        </div>

                </div>





                <div class="form-group" align="center">
                    <button class="btn btn-success" id="btn_aceptar" type="submit">Consultar</button>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <br><br>
                    @if ($citas)
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Doctor</th>
                                    <th>Paciente</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            @foreach ($citas as $obj)
                                <tr>
                                    <td align="center">{{ date('d/m/Y', strtotime($obj->Fecha)) }} </td>
                                    <td>{{ $obj->Hora }}</td>
                                    @if ($obj->Doctor)
                                        <td>{{ $obj->doctor->Nombre }}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    @if ($obj->Paciente)
                                        <td>{{ $obj->paciente->name }}</td>
                                    @else
                                        <td></td>
                                    @endif


                                    <td align="center">
                                        <a href="{{ URL::action('AdminCitasController@edit', $obj->Id) }}"
                                            class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        @if ($obj->Activo == 1)
                                            <a href="" data-target="#modal-desactivar-{{ $obj->Id }}"
                                                data-toggle="modal"><i class="fa fa-check-square-o"></i></a>
                                        @else
                                            <a href="" data-target="#modal-activar-{{ $obj->Id }}"
                                                data-toggle="modal"><i class="fa icon-check-empty"></i></a>
                                        @endif
                                    </td>
                                </tr>


                                @include('citas.modal')
                            @endforeach

                        </table>
                    @endif
                </div>

            </div>




        </div>

        @include('sweet::alert')

    </div>



@endsection
