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

            {!!Form::model($horario,['method'=>'PATCH','route'=>['horario.update',$horario->Id]])!!}
            {{Form::token()}}
            <br />


            <div class="form-group">

                <label class="control-label col-md-3" align="right">Dia</label>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <select name="Dia" class="form-control select2 ">
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







                <label class="col-sm-1 control-label">Hora</label>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="text" name="Hora" data-inputmask="'mask': ['99:99']" value="{{$horario->Hora}}" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-md-3" align="right">Doctor</label>
                <div class="col-md-6">
                    <select class="form-control" name="Doctor" id="Doctor">
                        @foreach($doctor as $obj)
                        @if($horario->Doctor == $obj->Id)
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
                <a href="{{url('catalogo/horario')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
            </div>

            {!!Form::close()!!}

        </div>
        @include('sweet::alert')
    </div>
</div>
@endsection
