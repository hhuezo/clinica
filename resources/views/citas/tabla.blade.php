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
        <td>{{$obj->Fecha}} </td>
        <td>{{$obj->Hora}}</td>
        <td>{{$obj->paciente->name }}</td>
        <td><i class="fa fa-pencil fa-lg" onclick="modal(<?php echo $obj->Id; ?>,'<?php echo $obj->Fecha; ?>','<?php echo $obj->Hora; ?>');"></i>
    </tr>


    @include('citas.modal')
    @endforeach

</table>