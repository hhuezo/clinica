<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Consultas Médicas</title>
    <!-- Stylesheets -->
    <link href="{{ asset('dentco-html/vendor/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('dentco-html/css/style.css') }}" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('dentco-html/images/LOGO.png') }}" type="image/x-icon">
    <link href='https://css.gg/awards.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

</head>
<script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>

<body class="shop-page">


    @include('menu_principal')






    <div class="page-content">



        <!--//section-->



        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="filters-row align-items-center">
                    <div class="filters-row-left"><span><strong>{{ $especialidad->Nombre }}</strong> </span>
                        <div class="form-inline">
                        </div>
                    </div>
                    <div class="filters-row-right d-flex align-items-center">
                        <span>¿Cuándo deseas tu cita? &nbsp; &nbsp; </span>
                        <input type="hidden" id="especialidad" value="{{$especialidad->Id}}">
                        <input type="date" id="calendario" value="{{ date('Y-m-d') }}">
                    </div>
                </div>

            </div>
        </div>





        <div class="section page-content-first" id="response">
            @foreach ($doctores as $doctor)
                <div class="container mt-6">
                    <div class="row">
                        <div class="col-md">
                            <div class="doctor-page-photo text-center">
                                <img src="{{ asset('dentco-html/images/' . $doctor->Foto) }}" class="img-fluid"
                                    alt="">
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
                        <div class="col-lg-8 mt-4 mt-lg-0">

                            <div class="col-md">
                                <ul class="services-nav flex-column flex-nowrap">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#submenu1" data-toggle="collapse"
                                            data-target="#submenu1">Horario</a>
                                        <div class="collapse show" id="submenu1">
                                            <ul class="flex-column nav">
                                                @foreach ($horarios as $horario)
                                                    @if ($horario->Doctor == $doctor->Id)
                                                        <li class="nav-item nav-link"
                                                            onclick="modal_reserva_cita({{ $horario->Id }})">
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
        </div>


    </div>




    <!--footer-->
    <div class="footer mt-0">
        <div class="container">
            <div class="row py-1 py-md-2 px-lg-0">
                <div class="col-lg-4 footer-col1">
                    <div class="row flex-column flex-md-row flex-lg-column">
                        <div class="col-md col-lg-auto">
                            <div class="footer-logo">
                                <img src="{{ asset('dentco-html/images/LOGO.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="mt-2 mt-lg-0"></div>
                            <div class="footer-social d-none d-md-block d-lg-none">
                                <a href="https://www.facebook.com/unidadmedicanr" target="blank" class="hovicon"><i
                                        class="icon-facebook-logo"></i></a>

                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i
                                        class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i
                                        class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="footer-social d-md-none d-lg-block">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i
                                        class="icon-facebook-logo"></i></a>

                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i
                                        class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i
                                        class="icon-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">

                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3>Nuestros Contactos</h3>
                    <div class="h-decor"></div>
                    <ul class="icn-list">
                        <li><i class="icon-placeholder2"></i>Colonia San Ernesto, Pasaje San Carlos, #154, San Salvador
                            .
                            <br>
                            <a href="contact.html" class="btn btn-xs btn-gradient"><i
                                    class="icon-placeholder2"></i><span>Obtener dirección</span><i
                                    class="icon-right-arrow"></i></a>
                        </li>
                        <li><i class="icon-telephone"></i><b><span class="phone"><span
                                        class="text-nowrap">2521-3705</span></span></b>
                        <li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a
                                        href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span></li>
                        <li><i class="icon-black-envelope"></i><a
                                href="mailto:nr.unidadmedica@gmail.com">nr.unidadmedica@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <style>
                .z-padd {
                    padding-left: 0px !important;
                }
            </style>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row text-center text-md-left">
                    <div class="col-sm">Copyright © 2022 <a href="#">Unidad Medica
                            NR</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                        <a href="#">Politicas de Privacidad</a>
                    </div>
                    <div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">
                            <li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a
                                            href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->
    <div class="backToTop js-backToTop">
        <i class="icon icon-up-arrow"></i>
    </div>


    <div class="modal fade" id="modal_reserva_cita" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-tipo="1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ url('citas_reserva') }}" method="POST">
                    {{ Form::token() }}
                    <div class="modal-header">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <h5 class="modal-title" id="exampleModalLabel">Reservar cita</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <input type="hidden" id="horario" name="Horario">
                    <input type="hidden" id="fecha" name="Fecha">

                    <div class="modal-body">
                        <div class="box-body">

                            ¿Desea reservar la cita?
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" onclick="cerrar_modal();" class="btn btn-warning"
                            data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>

            </div>
        </div>
    </div>
    @include('sweet::alert')
    <!-- Vendors -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/moment.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/waypoints/sticky.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/countTo/jquery.countTo.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/form-validation/jquery.form.js') }}"></script>
    <script src="{{ asset('dentco-html/vendor/form-validation/jquery.validate.min.js') }}"></script>


</body>


<script type="text/javascript">
    $(document).ready(function() {

        $("#calendario").change(function() {
            $('#response').html('<div><img src="../../../public/img/ajax-loader.gif"/></div>');
            var parametros = {
                "Especialidad": document.getElementById('especialidad').value,
                "Fecha": document.getElementById('calendario').value
            };
            $.ajax({
                type: "get",
                url: "{{ url('horarios_get') }}",
                data: parametros,
                success: function(data) {
                    console.log(data);
                    $('#response').html(data);
                }
            });

        });

    });

    function modal_reserva_cita(id) {
        document.getElementById('horario').value = id;
        document.getElementById('fecha').value = document.getElementById('calendario').value;
        $('#modal_reserva_cita').modal('show');

    }

    function cerrar_modal() {
        $('#modal_reserva_cita').modal('hide');
    }
</script>

</html>
