@extends ('menu')
@section('contenido')

<div class="x_panel">
    <div class="clearfix"></div>

    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

    <div class="x_title">
    <ul class="nav navbar-right panel_toolbox">
                    <a href="{{url('citas/create')}}" class="btn btn-info float-right"> <i class="fa fa-plus"></i> &nbsp;Nueva Cita</a>
                </ul>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h2>Listado de Citas </h2>
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
                        <th>Espacialidad</th>
                        <th>Doctor</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $obj)
                    <tr>
                        <td align="center">{{ $obj->pacientes->name}}</td>
                        <td>{{$obj->doctor->Nombre}}</td>
                        <td>{{ $obj->doctor->especialidad->Nombre }}</td>
                        <td>{{ date('d/m/Y', strtotime($obj->Fecha)) }}</td>
                        <td>{{ $obj->Hora }}</td>
                        <td align="center">
                            <a href="{{ URL::action('AdminCitasController@edit', $obj->Id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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
