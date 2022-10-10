<div class="modal fade" id="modal_jefatura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 175%; margin-left: -35% ;">
                {{Form::Open(array('url'=>'actualizar_citas','method'=>'POST'))}}
                    {{Form::token()}}
                    <div class="modal-header">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h4 class="modal-title" id="exampleModalLabel">Datos de la Cita</h4>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <div class="box-body">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6 class="modal-title" id="exampleModalLabel"></h6>
                            </div>
                            <input type="hidden" id="cita" name="cita">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <h5 class="modal-title" id="exampleModalLabel">Datos de la Cita Actual</h5>
                                <br>
                                <div class="form-group">
                                    
                                    <label class="col-sm-3 control-label">Fecha</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="Fecha" name="Fecha"  class="form-control" readonly autofocus="true">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hora</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="Hora" name="Hora"  class="form-control" autofocus="true" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <h5 class="modal-title" id="exampleModalLabel">Datos de la Cita Actualizada</h5>
                                <br>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Fecha Actualizada</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="FechaActualizada" name="FechaActualizada"  onblur="cargarHorario();" class="form-control" autofocus="true">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hora Actualizada</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="HoraActualizada" id="HoraActualizada" class="form-control">

                                        </select>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                    {{Form::Close()}}
            </div>
        </div>
    </div>
