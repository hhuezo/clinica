@extends ('menu')
@section ('contenido')
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
<div class="x_panel">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">

            <div class="x_title">
                <h2>Nuevo Horarios <small></small></h2>
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

                {!!Form::open(array('url'=>'catalogo/horario','method'=>'POST','autocomplete'=>'off'))!!}
                {{Form::token()}}



                <div class="form-group row">
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
                    <input type="text" id="Hora" name="Hora" min="4" max="4" value="{{old('Hora')}}" required data-inputmask="'mask': ['99:99']" class="form-control">
                    </div>

                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label">Doctor</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Doctor" class="form-control">
                            @foreach($doctores as $obj)
                            <option value="{{$obj->Id}}">{{$obj->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-3 control-label">&nbsp;</label>
                </div>




                <div class="form-group" align="center">
                    <button class="btn btn-success" type="submit">Guardar</button>

                    <a href="{{url('catalogo/horario/')}}"><button class="btn btn-primary" type="button">Cancelar</button></a>
                </div>

                {!!Form::close()!!}







            </div>












        </div>
        @include('sweet::alert')
    </div>
</div>
</div>
@endsection
