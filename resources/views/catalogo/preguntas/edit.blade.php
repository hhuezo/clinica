@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
<div class="x_panel">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

            <div class="x_title">
                <h2>Nueva pregunta <small></small></h2>
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

                {!!Form::model($pregunta,['method'=>'PATCH','route'=>['preguntas.update',$pregunta->Id]])!!}
            {{Form::token()}}

                <div class="form-group">
                    <label class="col-sm-3 control-label">Pregunta</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="Pregunta" id="Pregunta" cols="30" rows="4" class="form-control">{{$pregunta->Pregunta}}</textarea>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Respuesta</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="Respuesta" id="Respuesta" cols="30" rows="4" class="form-control">{{$pregunta->Respuesta}}</textarea>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3" align="right">Especialidad</label>
                    <div class="col-md-6">
                        <select class="form-control" name="Especialidad" id="Especialidad">
                            @foreach ($especialidad as $obj)
                                @if ($pregunta->Especialidad == $obj->Id)
                                    <option value="{{ $obj->Id }}" selected>{{ $obj->Nombre }}</option>
                                @else
                                    <option value="{{ $obj->Id }}">{{ $obj->Nombre }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                </div>


                <div class="form-group" align="center">
                    <button class="btn btn-success" type="submit">Guardar</button>

                    <a href="{{url('catalogo/preguntas/')}}"><button class="btn btn-primary" type="button">Cancelar</button></a>
                </div>

                {!!Form::close()!!}

            </div>

        </div>
        @include('sweet::alert')
    </div>
</div>
</div>
@endsection
