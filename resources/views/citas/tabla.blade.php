<br>
<table id="datatable" class="table table-striped table-bordered">
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Paciente</th>
        <th>Opciones</th>
    </tr>
    @foreach($reserva as $obj)
    <tr>
        <td>{{ date('d/m/Y', strtotime($obj->Fecha)) }} </td>
        <td>{{$obj->Hora}}</td>
        <td>{{$obj->paciente->name }}</td>
        <td><i class="fa fa-pencil fa-lg" onclick="modal(<?php echo $obj->Id; ?>,'<?php echo $obj->Fecha; ?>','<?php echo $obj->Hora; ?>');"></i>
        &nbsp;
            @if($obj->Activo == 1)
            <a href="" data-target="#modal-desactivar-{{$obj->Id}}" data-toggle="modal"><i class="fa fa-check-square-o"></i></a>
            @else
            <a href="" data-target="#modal-activar-{{$obj->Id}}" data-toggle="modal"><i class="fa icon-check-empty"></i></a>
            @endif
        </td>
    </tr>


    @include('citas.modal')



    @endforeach

</table>