@extends ('menu')
@section('contenido')
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

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


                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {!! Form::model($doctor, ['method' => 'PATCH', 'route' => ['doctor.update', $doctor->Id]]) !!}
                {{ Form::token() }}
                <br />


                <div class="form-group">
                    <label class="col-sm-3 control-label">Nombre</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Nombre" class="form-control" value="{{ $doctor->Nombre }}"
                            required="true" onblur="this.value = this.value.toUpperCase()">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Titulo</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Titulo" class="form-control" value="{{ $doctor->Titulo }}"
                            required="true" onblur="this.value = this.value.toUpperCase()">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="control-label col-md-3" align="right">Especialidad</label>
                    <div class="col-md-6">
                        <select class="form-control" name="Especialidad" id="Especialidad">
                            @foreach ($especialidad as $obj)
                                @if ($doctor->Especialidad == $obj->Id)
                                    <option value="{{ $obj->Id }}" selected>{{ $obj->Nombre }}</option>
                                @else
                                    <option value="{{ $obj->Id }}">{{ $obj->Nombre }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Correo</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="Correo" class="form-control" value="{{ $doctor->Correo }}"
                            required="true">
                    </div>
                </div>

                <div class="form-group" align="center">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a href="{{ url('catalogo/doctor') }}"><button type="button"
                            class="btn btn-danger">Cancelar</button></a>

                </div>

                {!! Form::close() !!}

                <!-- foto -->
                <div class="form-group row" >
                    <label class="control-label col-md-3" align="right">&nbsp;</label>
                    <div class="col-md-6" style=" text-align: center;">
                        <div class="image view view-first" >
                            <img style="max-height: 200px; display: block; padding-left: 42%;"
                                src="{{ asset('dentco-html/images/' . $doctor->Foto) }}" alt="image">
                            <br>
                            
                            <form method="POST" action="{{url('doctor/foto/actualizar')}}" enctype="multipart/form-data">
                            {{ Form::token() }}
                            <!-- <label class="col-md-12" align="center">Actualizar Fotografia</label> -->
                                <div class="col-md-6" style="padding-left: 35%;">
                                    <input type="hidden" value="{{$doctor->Id}}" name="doctor">
                                    <input type="file" name="Foto" accept="image/*"> 
                                <br>
                                
                       
                                <button type="submit" class="btn btn-primary" ><i class="fa fa-refresh"></i>
                                Actualizar Fotografia
                                </button>
                                </div>
                                
                            </form>
                            <br>
                            <br>
                            

                        </div>
                    </div>
                </div>

                <!-- fin foto -->


            </div>
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">&nbsp;



                <div class="modal fade" id="modal_eliminar_perfil" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ url('catalogo/doctor/eliminar_perfil') }}" method="POST">
                            <div class="modal-header">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar perfil</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" id="IdPerfil" name="Id">

                            <div class="modal-body">
                                <div class="box-body">
                                    Desea eliminar el registro?
                                </div>

                                <div class="clearfix"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                </div>

                                {{ Form::token() }}

                        </form>
                    </div>
                </div>
            </div>



            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-horizontal form-label-left">
                <div class="x_title">
                    <h2>Horarios </h2>

                    <ul class="nav navbar-right panel_toolbox">
                        <button onclick="modal_agregar_horario()" class="btn btn-info float-right"> <i
                                class="fa fa-plus"></i> Agregar</button>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <table id="datatable1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Dia</th>
                            <th>Hora</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($horarios as $obj)
                            <tr>
                                <td align="center">{{ $dias[$obj->Dia] }}</td>
                                <td align="center">{{ $obj->Hora }}</td>
                                <td>

                                    <i class="fa fa-trash fa-lg" onclick="modal_eliminar_horario(<?php echo $obj->Id; ?>)"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-horizontal form-label-left">
                <div class="x_title">
                    <h2>Perfil profesional </h2>

                    <ul class="nav navbar-right panel_toolbox">
                        <button onclick="modal_agregar_perfil()" class="btn btn-info float-right"> <i
                                class="fa fa-plus"></i> Agregar</button>
                    </ul>
                    <div class="clearfix"></div>
                </div>


                <table id="datatable2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perfiles_profesionales as $obj)
                            <tr>
                                <td align="center">{{ $obj->Descripcion }}</td>
                                <td>

                                    <i class="fa fa-trash fa-lg" onclick="modal_eliminar_perfil(<?php echo $obj->Id; ?>)"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>






            <div class="modal fade" id="modal_agregar_perfil" tabindex="-2" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="7">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ url('catalogo/doctor/agregar_perfil') }}" method="POST">
                            <div class="modal-header">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar perfil</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <input type="hidden" value="{{ $doctor->Id }}" name="Id">

                            <div class="modal-body">
                                <div class="box-body">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Descripción</label>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="Descripcion" required class="form-control">
                                            </div>

                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning"
                                                data-dismiss="modal">Cancelar</button>
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




        @include('sweet::alert')




        <div class="modal fade" id="modal_eliminar_horario" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ url('catalogo/doctor/eliminar_horario') }}" method="POST">
                        <div class="modal-header">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Horario</h5>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <input type="hidden" id="IdHorario" name="Id">

                        <div class="modal-body">
                            <div class="box-body">
                                Desea eliminar el registro?
                            </div>

                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>

                            {{ Form::token() }}

                    </form>
                </div>
            </div>
        </div>







    </div>


    <div class="modal fade" id="modal_agregar_horario" tabindex="-2" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ url('catalogo/doctor/agregar_horario') }}" method="POST">
                    <div class="modal-header">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Horario</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" value="{{ $doctor->Id }}" name="Id">

                    <div class="modal-body">
                        <div class="box-body">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Dia</label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <select id="Dia" name="Dia" value="0" class="form-control ">

                                            @for ($i = 0; $i < count($dias); $i++)
                                                <option value="{{ $i }}">{{ $dias[$i] }}</option>
                                            @endfor

                                        </select>
                                    </div>

                                </div>
                                <br>
                                <label class="control-label col-md-3">Hora</label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="time" name="Hora" id="Hora" required class="form-control">
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




    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>


    <script type="text/javascript">
        function modal_agregar_horario() {
            $('#modal_agregar_horario').modal('show');
        }

        function modal_eliminar_horario(id) {
            document.getElementById('IdHorario').value = id;

            $('#modal_eliminar_horario').modal('show');
        }

        function modal_agregar_perfil() {
            $('#modal_agregar_perfil').modal('show');
        }

        function modal_eliminar_perfil(id) {
            document.getElementById('IdPerfil').value = id;

            $('#modal_eliminar_perfil').modal('show');
        }
    </script>


    </div>





@endsection
