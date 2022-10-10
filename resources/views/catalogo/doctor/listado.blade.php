@extends ('menu')
@section('contenido')

<div class="x_panel">
    <div class="clearfix"></div>

    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

    <div class="x_title">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h2>Listado de Citas de Hoy </h2>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
    <br>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="form-group">
            <label class="col-sm-3 control-label">Fecha Inicio</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" name="FechaInicio" id="FechaInicio" class="form-control" value="{{date('Y-m-d')}}" autofocus="true">
            </div>
            <label class="col-sm-3 control-label">&nbsp;</label>
        </div>

        <br>
        <br>

        <div class="form-group">
            <label class="col-sm-3 control-label">Fecha Final</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="date" name="FechaFinal" id="FechaFinal" class="form-control" value="{{date('Y-m-d')}}" autofocus="true">
            </div>
            <label class="col-sm-3 control-label">&nbsp;</label>
        </div>
        <br>
        <br>
        <div class="form-group" align="center">
            <button class="btn btn-success" id="btn_aceptar" type="submit">Consultar</button>
            <button class="btn btn-info" id="btn_desactivar" type="submit" disabled>Desactivar</button>
            <button class="btn btn-primary" id="btn_activar" type="submit" disabled>Activar</button>
        </div>

        <div id="response">


        </div>
    </div>
    <br>
    <br>
    <div class="clearfix"></div>


    <div class="row" style="display: show;" id="Maintable">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Paciente</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $obj)
                    <tr>
                        <td>{{ date('d/m/Y', strtotime($obj->Fecha)) }}</td>
                        <td>{{ $obj->Hora }}</td>
                        <td>{{ $obj->paciente->name }}</td>
                        <td align="center">
                            <a href="{{ URL::action('catalogo\DoctorController@edit', $obj->Id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            &nbsp;&nbsp;
                            <a href="" data-target="#modal-desactivar-{{ $obj->Id }}" data-toggle="modal"><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>



                    @endforeach
                </tbody>
            </table>

            <div class="clearfix"></div>

        </div>

        @include('sweet::alert')

    </div>
</div>
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
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#btn_aceptar").click(function() {

            $('#Maintable').hide();
            if (document.getElementById('FechaInicio').value.trim() == '') {
                swal("Error!", "Digite una fecha de inicio", "error");
                return false;
            }
            if (document.getElementById('FechaFinal').value.trim() == '') {
                swal("Error!", "Digite una fecha final", "error");
                return false;
            }
            if (document.getElementById('FechaInicio').value.trim() > document.getElementById('FechaFinal').value.trim()) {
                swal("Error!", "Digite las fechas correctamente", "error");
                return false;
            }
            $('#response').html('<div align="center"><img src="{{ asset('img/ajax-loader.gif ') }}"/></div>');

            var parametros = {
                "FechaInicio": document.getElementById('FechaInicio').value,
                "FechaFinal": document.getElementById('FechaFinal').value,
            };
            $.ajax({
                type: "get",
                url: "{{ url('reservas_citas_doctor') }}",
                data: parametros,
                success: function(data) {
                    console.log(data);
                    $('#response').html(data);

                }

            });

            $("#btn_desactivar").removeAttr('disabled');
            $("#btn_activar").removeAttr('disabled');
        })

        $("#btn_desactivar").click(function() {


            var parametros = {
                "FechaInicio": document.getElementById('FechaInicio').value,
                "FechaFinal": document.getElementById('FechaFinal').value,
            };
            $.ajax({
                type: "get",
                url: "{{ url('desactivar_citas') }}",
                data: parametros,
                success: function(data) {
                    console.log(data);
                    $('#response').html(data);

                }

            });


        })

        $("#btn_activar").click(function() {


            var parametros = {
                "FechaInicio": document.getElementById('FechaInicio').value,
                "FechaFinal": document.getElementById('FechaFinal').value,
            };
            $.ajax({
                type: "get",
                url: "{{ url('activar_citas') }}",
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
</script>
@endsection