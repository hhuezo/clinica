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
                    <button type="button" class="btn btn-success" onclick="Horario(<?php echo $obj->Id; ?>,'<?php echo $obj->Dia; ?>','<?php echo $obj->Hora; ?>'
                           )">Agrerar Horario</button></a>

                    <button type="button" class="btn btn-success" onclick="Perfil(<?php echo $obj->Id; ?>,'<?php echo $obj->Descripcion; ?>'
                           )">Agrerar Perfil Profesional</button></a>

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
                </div>
            </div>
            <br>
            <table class="table table-hover  datatable table-bordered">
                <thead>
                    <tr>
                        <th align="center">Perfil Profecional</th>

                        <th><i class="fa fa-trash fa-lg"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perfiles_profesionales as $perfil)
                    @if ($perfil->Doctor == $doctor->Id)
                    <tr>
                        <td align="center">{{ $perfil->Descripcion }}</td>

                        <td>
                            <i class="fa fa-trash fa-lg" onclick="destroy(<?php echo $obj->Id ?>)"></i>
                        </td>
                    </tr>
                    @endif
                    @endforeach


                </tbody>
            </table>
        </div>

        <div align="right " class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-horizontal form-label-left">
            <div class="form-group">
                <table class="table table-hover datatable table-bordered">
                    <thead>
                        <tr>
                            <th>Dia</th>
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

                                <i class="fa fa-trash fa-lg" onclick="eliminarCentro(<?php echo $obj->Id ?>)"></i>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        @include('sweet::alert')

        <!-- Modal eliminar centro -->

        <div class="modal fade" id="modal_perfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ url('catalogo/doctor/perfil') }}" method="POST">
                            <div class="modal-header">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Perfil</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" value="{{$doctor->Id}}" id="Id" name="Id">
                            <div class="modal-body">
                                <div class="box-body">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

                                        <br>

                                        <label class="col-md-5 control-label">Perfil</label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                        <textarea class="col-md-12 "name="Descripcion"  id="Descripcion" class="form-control" ></textarea>
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
    </div>
    <div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ url('catalogo/doctor/horario') }}" method="POST">
                    <div class="modal-header">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Horario</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" value="{{$doctor->Id}}" id="Id" name="Id">

                    <div class="modal-body">
                        <div class="box-body">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Dia</label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <option  >SELECCIONE</option>
                                        <select id="Dia" name="Dia" value="0"  class="form-control ">

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
                                <label class="col-md-6 col-sm-6 col-xs-6 control-label">Hora</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="time" name="Hora" id="Hora"  class="form-control">
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
        function Horario(Id, Dia, Hora) {

            document.getElementById('Hora').value = Hora;
            document.getElementById('Dia').value = Dia;


            $('#modal_update').modal('show');
        }

        function Perfil(Id, Descripcion) {

            document.getElementById('Descripcion').value = Descripcion;

            $('#modal_perfil').modal('show');
        }




    </script>


</div>





@endsection
