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
            </div>



            {!!Form::close()!!}

        </div>
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
        <div align="right ">

            <div class="col-md-6">
                <ul class="services-nav flex-column flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Horarios</a>
                        <div class="collapse show" id="submenu1">
                            <ul class="flex-column nav">
                                @foreach ($horarios as $horario)
                                @if ($horario->Doctor == $doctor->Id)
                                <li class="nav-item nav-link" ({{ $horario->Id }})">
                                    {{ date('g:i A', strtotime($horario->Hora)) }}
                                </li>
                                @endif
                                @endforeach

                            </ul>
                        </div>
                    </li>

                </ul>

            </div>



        </div>

        @include('sweet::alert')

    </div>
</div>
@endsection
