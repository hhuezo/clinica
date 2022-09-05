@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
<div class="x_panel">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

            <div class="x_title">
                <h2>Nueva especialidad <small></small></h2>
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

                {!!Form::open(array('url'=>'catalogo/doctor','method'=>'POST','autocomplete'=>'off','enctype' => 'multipart/form-data'))!!}
                {{Form::token()}}

                <div class="form-group">
                    <label class="col-sm-3 control-label">Nombre</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Nombre" class="form-control" autofocus="true" required="true" onblur="this.value = this.value.toUpperCase()">
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Especialidad</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Especialidad" class="form-control">
                            @foreach($especialidad as $obj)
                            <option value="{{$obj->Id}}">{{$obj->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Titulo</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="Titulo" class="form-control" autofocus="true" required="true" onblur="this.value = this.value.toUpperCase()">
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Foto</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="file" name="Foto" accept="image/*">
                    </div>
                </div>

                <div class="form-group" align="center">
                    <button class="btn btn-success" type="submit">Guardar</button>

                </div>

                {!!Form::close()!!}







            </div>












        </div>
        @include('sweet::alert')
    </div>
</div>
</div>
@endsection
