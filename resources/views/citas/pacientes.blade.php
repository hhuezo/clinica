@extends ('menu')
@section('contenido')

<div class="x_panel">
    <div class="clearfix"></div>

    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

    <div class="x_title">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h2>Listado de Pacientes </h2>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12" align="right">
            <a href="{{ url('agregar_paciente') }}"><button class="btn btn-info float-right"> <i class="fa fa-plus"></i> Nuevo</button></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>



    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Dui</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $obj)
                    <tr>
                        <td >{{ $obj->name }}</td>
                        <td>{{ $obj->email }}</td>
                        <td>{{ $obj->telefono }}</td>
                        <td>{{ $obj->dui }}</td>
                        <td align="center">
                            <a href="{{ URL::action('seguridad\UserController@edit', $obj->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            &nbsp;&nbsp;
                            

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

            <div class="clearfix"></div>
        </div>

        @include('sweet::alert')

    </div>
</div>

@endsection
