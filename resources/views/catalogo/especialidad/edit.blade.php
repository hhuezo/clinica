@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>

<div class="x_panel">
    <div class="clearfix"></div>
    <div class="row">
        <div class="x_title">
            <h2>Modificación de Especialidad </h2>

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

            {!!Form::model($especialidad,['method'=>'PATCH','route'=>['especialidad.update',$especialidad->Id]])!!}
            {{Form::token()}}
            <br />


            <div class="form-group">
                <label class="col-sm-3 control-label">Nombre</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="Nombre" class="form-control" value="{{$especialidad->Nombre}}" required="true" onblur="this.value = this.value.toUpperCase()">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3" align="right">Categoria</label>
                <div class="col-md-6">
                    <select class="form-control" name="Categoria" id="Categoria">
                        @foreach($categoria as $obj)
                        @if($especialidad->Categoria == $obj->Id)
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
                <a href="{{url('catalogo/especialidad')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>

            {!!Form::close()!!}

        </div>
        @include('sweet::alert')
    </div>
</div>
@endsection
