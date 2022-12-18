@extends ('menu')
@section('contenido')
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
    <div class="x_panel">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

                <div class="x_title">
                    <h2>Reserva de cita <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="{{url('citas/create')}}" class="btn btn-info float-right"> <i class="fa fa-plus"></i> &nbsp;Nueva Cita</a>
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

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Doctor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="Doctor" id="Doctor" class="form-control">
                                <option value="">Seleccione...</option>
                                @foreach ($doctores as $obj)
                                    <option value="{{ $obj->Id }}">{{ $obj->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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

                <div id="response">


                </div>

            </div>




        </div>


        <div class="modal fade" id="modal_desactivar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-tipo="1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ url('desactivar') }}" method="POST">
                        {{ Form::token() }}
                        <div class="modal-header">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <h5 class="modal-title" id="exampleModalLabel">Desactivar cita</h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <input type="hidden" id="id" name="id">


                        <div class="modal-body">
                            <div class="box-body">

                                <p>Confirme si desea desactivar la cita </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="modal fade" id="modal_activar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-tipo="1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ url('activar') }}" method="POST">
                        {{ Form::token() }}
                        <div class="modal-header">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <h5 class="modal-title" id="exampleModalLabel">Desactivar cita</h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <input type="hidden" id="id_activar" name="id">


                        <div class="modal-body">
                            <div class="box-body">

                                <p>Confirme si desea desactivar la cita </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @include('sweet::alert')

    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <script type="text/javascript">
        //eliminar oficina
        function modal(Id, Fecha, Hora) {
            document.getElementById('cita').value = Id;
            document.getElementById('Fecha').value = Fecha;
            document.getElementById('FechaActualizada').value = Fecha;
            document.getElementById('Hora').value = Hora;
            $('#modal_jefatura').modal('show');

        }

        function desactivar(id)
        {
            document.getElementById('id').value = id;
            $('#modal_desactivar').modal('show');
        }


        function activar(id)
        {
            document.getElementById('id_activar').value = id;
            $('#modal_activar').modal('show');
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#btn_aceptar").click(function() {
                if (document.getElementById('Doctor').value == '') {
                    swal("Error!", "Seleccione un Doctor", "error");
                    return false;
                }
                if (document.getElementById('FechaInicio').value.trim() == '') {
                    swal("Error!", "Digite una fecha de inicio", "error");
                    return false;
                }
                if (document.getElementById('FechaFinal').value.trim() == '') {
                    swal("Error!", "Digite una fecha final", "error");
                    return false;
                }
                if (document.getElementById('FechaInicio').value.trim() > document.getElementById(
                        'FechaFinal').value.trim()) {
                    swal("Error!", "Digite las fechas correctamente", "error");
                    return false;
                }
                $('#response').html(
                    '<div align="center"><img src="{{ asset('img/ajax-loader.gif') }}"/></div>');

                var parametros = {
                    "Doctor": document.getElementById('Doctor').value,
                    "FechaInicio": document.getElementById('FechaInicio').value,
                    "FechaFinal": document.getElementById('FechaFinal').value,
                };
                $.ajax({
                    type: "get",
                    url: "{{ url('reservas_citas') }}",
                    data: parametros,
                    success: function(data) {
                        console.log(data);
                        $('#response').html(data);

                    }

                });
            })
            $("#FechaInicio").change(function() {
                document.getElementById('FechaFinal').value = document.getElementById('FechaInicio').value;
            });
        })

        function cargarHorario() {

            var Cita = document.getElementById('cita').value;
            var Fecha = document.getElementById('FechaActualizada').value;


            var parametros = {
                "Cita": document.getElementById('cita').value,
                "Fecha": document.getElementById('FechaActualizada').value,
            };
            $.ajax({
                type: "get",
                url: "{{ url('horario_get') }}",
                data: parametros,
                success: function(data) {
                    console.log(data);
                    var _select = ''
                    for (var i = 0; i < data.length; i++)
                        _select += '<option value="' + data[i].Id + '"  >' + data[i].Hora +
                        '</option>';

                    $("#HoraActualizada").html(_select);

                }

            });

        }
    </script>
@endsection
