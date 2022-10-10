@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
<div class="x_panel">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

            <div class="x_title">
                <h2>Reserva de cita <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">

                </ul>
                <div class="clearfix"></div>
            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
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
                            <option value="{{$obj->Id}}">{{$obj->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha Inicio</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="FechaInicio" id="FechaInicio"  class="form-control" value="{{date('Y-m-d')}}" autofocus="true">
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha Final</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="FechaFinal" id="FechaFinal"  class="form-control"  value="{{date('Y-m-d')}}" autofocus="true">
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
 
    @include('sweet::alert')

</div>

<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<script type="text/javascript">
                //eliminar oficina
                function modal(Id,Fecha,Hora) {
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
                if (document.getElementById('FechaInicio').value.trim() > document.getElementById('FechaFinal').value.trim()) {
                    swal("Error!", "Digite las fechas correctamente", "error");
                    return false;
                }
                $('#response').html('<div align="center"><img src="{{ asset('img/ajax-loader.gif') }}"/></div>');

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

        function cargarHorario(){
            
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