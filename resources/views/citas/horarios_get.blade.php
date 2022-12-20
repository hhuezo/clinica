<script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
@foreach ($doctores as $doctor)
<div class="container mt-6">
    <div class="row">
        <div class="col-md">
            <div class="doctor-page-photo text-center">
                <img src="{{ asset('dentco-html/images/' . $doctor->Foto) }}" class="img-fluid" alt="">
            </div>
            <div class="mt-3 mt-md-5"></div>
            <ul class="marker-list-md">
                @foreach ($perfiles_profesionales as $perfil)
                @if ($perfil->Doctor == $doctor->Id)
                <li><i>{{ $perfil->Descripcion }}</i></li>
                @endif
                @endforeach


            </ul>
            </table>
        </div>
        <div class="col-lg-4 mt-2 mt-lg-0">
            <div class="col-md">
                <ul class="services-nav flex-column flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Preguntas</a>
                        <div class="collapse show" id="submenu1">
                            <ul class="flex-column nav">
                                <div class="accordion accordion-flush" id="accordionFlushExample" style="width:100% ">
                                    @php($i=1)
                                    @foreach($preguntas as $obj)
                                    <div class="accordion-item" style="margin-bottom: 0.7%;">
                                        <h2 class="accordion-header" id="flush-heading{{$i}}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$i}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{$obj->Pregunta}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$i}}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$obj->Respuesta}}</div>
                                        </div>
                                    </div>

                                    @php($i++)
                                    @endforeach

                                </div>

                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
        <div class="col-lg-4 mt-2 mt-lg-0">

            <div class="col-md">
                <ul class="services-nav flex-column flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Horarios</a>
                        <div class="collapse show" id="submenu1">
                            <ul class="flex-column nav">
                                @foreach ($horarios as $horario)
                                @if ($horario->Doctor == $doctor->Id)
                                <li class="nav-item nav-link" onclick="modal_reserva_cita({{ $horario->Id }})">
                                    {{ date('g:i A', strtotime($horario->Hora)) }}
                                </li>
                                @endif
                                @endforeach

                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>

    </div>
</div>
@endforeach
@include('sweet::alert')