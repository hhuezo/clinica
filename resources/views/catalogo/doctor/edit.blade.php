@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>

<div class="x_panel">
    <div class="clearfix"></div>
    <div class="row">
        <div class="x_title">
            <h2>Modificación de Doctor </h2>

            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">


            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!!Form::model($doctor,['method'=>'PATCH','route'=>['doctor.update',$doctor->Id]])!!}
            {{Form::token()}}
            <br />


            <div class="form-group">
                <label class="col-sm-3 control-label">Nombre</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="Nombre" class="form-control" value="{{$doctor->Nombre}}" required="true" onblur="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Titulo</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="Titulo" class="form-control" value="{{$doctor->Titulo}}" required="true" onblur="this.value = this.value.toUpperCase()">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3" align="right">Especialidad</label>
                <div class="col-md-6">
                    <select class="form-control" name="Especialidad" id="Especialidad">
                        @foreach($especialidad as $obj)
                        @if($doctor->Especialidad == $obj->Id)
                        <option value="{{$obj->Id}}" selected>{{$obj->Nombre}}</option>
                        @else
                        <option value="{{$obj->Id}}">{{$obj->Nombre}}</option>
                        @endif
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group" align="center">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{url('catalogo/doctor')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <td align="center">

              <button type="button" class="btn btn-success"
                           onclick="updt(<?php echo $obj->Id; ?>,'<?php echo $obj->Dia; ?>','<?php echo $obj->Hora; ?>'
                           )">Agrerar Horario</button></a>

                </td>



            </div>



            {!!Form::close()!!}

        </div>
        <br>
        <br>
        <div align="right " class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-horizontal form-label-left">

            <div class="col-md-6">
                <div class="doctor-page-photo text-center">
                    <img src="{{ asset('dentco-html/images/' . $doctor->Foto) }}" style="max-height:400px;max-width:500px;height:auto;width:auto;" class="img-fluid" alt="">
                    <div class="mt-3 mt-md-5"></div>
                    <ul class="marker-list-md">
                        @foreach ($perfiles_profesionales as $perfil)
                        @if ($perfil->Doctor == $doctor->Id)
                        <li><i>{{ $perfil->Descripcion }}</i></li>
                        @endif
                        @endforeach


                    </ul>



                </div>
            </div>




        </div>


        <div align="right " class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-horizontal form-label-left">
            <div class="form-group">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Horarios</th>
                            <th><i class="fa fa-trash fa-lg"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hoaios_actuales as $obj)
                        <tr>
                            <td align="center">{{$dias[$obj->Dia]}}</td>
                            <td align="center">{{$obj->Hora}}</td>
                            <td>
                                <i class="fa fa-trash fa-lg" onclick="eliminarTecnico(<?php echo $obj->Id ?>)"></i>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        @include('sweet::alert')

        <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ url('catalogo/doctor/horario') }}" method="POST">
                        <div class="modal-header">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                <h5 class="modal-title" id="exampleModalLabel">Modicar Cantidad Solicitada</h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <input type="" value="{{$doctor->Id}}" id="Id" name="Id">

                        <div class="modal-body">
                            <div class="box-body">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                                    <div class="form-group">

                                        <label class="control-label col-md-5" align="right">Dia</label>
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <select id="Dia" name="Dia" class="form-control  ">
                                                <option value="0" <?php if ($dias == 0) {
                                                                        echo 'selected';
                                                                    } ?>>Domingo</option>
                                                <option value="1" <?php if ($dias == 1) {
                                                                        echo 'selected';
                                                                    } ?>>Lunes</option>
                                                <option value="2" <?php if ($dias == 2) {
                                                                        echo 'selected';
                                                                    } ?>>Martes</option>
                                                <option value="3" <?php if ($dias == 3) {
                                                                        echo 'selected';
                                                                    } ?>>Miercoles</option>
                                                <option value="4" <?php if ($dias == 4) {
                                                                        echo 'selected';
                                                                    } ?>>Jueves</option>
                                                <option value="5" <?php if ($dias == 5) {
                                                                        echo 'selected';
                                                                    } ?>>Viernes</option>
                                                <option value="6" <?php if ($dias == 6) {
                                                                        echo 'selected';
                                                                    } ?>>Sabado</option>

                                            </select>
                                        </div>

                                    </div>
                                    <br>

                                    <label class="col-md-5 control-label">Hora</label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">


                                        <input type="text" name="Hora" id="Hora" required data-inputmask="'mask': ['99:99']" class="form-control">
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                    </div>






                                    {{ Form::token() }}

                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>












        <!-- jQuery -->
        <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>



        <script type="text/javascript">



            function updt(id, Dia, Doctor, Hora) {
                // alert(Nombre);
                document.getElementById('Id').value = Doctor;
                document.getElementById('Hora').value = Hora;
                document.getElementById('Dia').value = Dia;


                $('#modal_update').modal('show');
            }
        </script>


    </div>





    @endsection
