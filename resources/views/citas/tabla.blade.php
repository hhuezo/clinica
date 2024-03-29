<br>
<table id="datatable" class="table table-striped table-bordered">
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Doctor</th>
        <th>Paciente</th>
        <th>Opciones</th>
    </tr>
    @foreach($reserva as $obj)
    <tr>
        <td>{{ date('d/m/Y', strtotime($obj->Fecha)) }} </td>
        <td>{{$obj->Hora}}</td>
        <td>{{$obj->doctor->Nombre}}</td>
        @if($obj->Paciente)
        <td>{{$obj->paciente->name }}</td>
        @else
        <td></td>
        @endif
        <td><i class="fa fa-pencil fa-lg" onclick="modal(<?php echo $obj->Id; ?>,'<?php echo $obj->Fecha; ?>','<?php echo $obj->Hora; ?>');"></i>


        &nbsp;
        @can('desactivar cita')
            @if($obj->Activo == 1)
            <i class="fa fa-check-square-o" onclick="desactivar(<?php echo $obj->Id; ?>)"></i>
            @else
             <i class="fa fa-close" onclick="activar(<?php echo $obj->Id; ?>)"></i>
            @endif
        @endcan
        </td>
    </tr>


    @include('citas.modal')



    @endforeach

</table>
