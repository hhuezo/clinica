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
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href='https://css.gg/awards.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>


    <style>
        .prd-img {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col-equalH {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="shop-page">


    @include('menu_principal')





    @foreach ($categorias as $categoria)
        <div class="text-center mb-2  mb-md-3 mb-lg-4">
            <div class="h-sub theme-color"> &nbsp;</div>
            <h1>{{$categoria->Nombre}}</h1>
            <div class="h-decor"></div>

        </div>


        <div class="container">
            <div class="row col-equalH">
                @foreach ($especialidades as $especialidad)
                    @if($especialidad->Categoria == $categoria->Id)
                    <a href="{{URL::action('CitasController@edit',$especialidad->Id)}}" class="on-default edit-row">
                    <form method="POST" action="{{ url('citas_reserva') }}">
                    <div class="prd mb-2  mb-md-3 mb-lg-4">
                        <div class="prd-img">
                          <img src="{{ asset('img/logo_categoria.png') }}"
                                    style="max-width: 200px;" class="img-fluid" alt="">
                        </div>
                        <div class="prd-info">
                            <h3><strong>{{ $especialidad->Nombre }}</strong></h3>

                           <button class="btn"><i class="icon-terapevt"></i>Reservar cita<i
                                    class="iicon-terapevt"></i></button>
                        </div>
                    </div>
                    </form>
                    </a>
                    @endif
                @endforeach

            </div>
        </div>
    @endforeach






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
    <div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <h3>Haga sus preguntas</h3>
                        <form class="mt-15" id="questionForm" method="post" novalidate>
                            <div class="successform">
                                <p>Tu mensaje se envio correctamente!</p>
                            </div>
                            <div class="errorform">
                                <p>Algo salio mal, por favor vuelve a intentarlo.</p>
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-user"></i>
                                </span>
                                <input type="text" name="name" class="form-control" autocomplete="off"
                                    placeholder="Tu Nombre*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-email2"></i>
                                </span>
                                <input type="text" name="email" class="form-control" autocomplete="off"
                                    placeholder="Correo Electronico*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-smartphone"></i>
                                </span>
                                <input type="text" name="phone" class="form-control" autocomplete="off"
                                    placeholder="Numero Telefonico" />
                            </div>
                            <textarea name="message" class="form-control" placeholder="Tu comentario*"></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Preguntar Ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-form fade" id="modalBookingForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <button aria-label='Close' class='close' data-dismiss='modal'>
                    <i class="icon-error"></i>
                </button>
                <div class="modal-body">
                    <div class="modal-form">
                        <h3>Agendar una cita</h3>
                        <form class="mt-15" id="bookingForm" method="post" novalidate>
                            <div class="successform">
                                <p>Su mensaje se envio correctamente!</p>
                            </div>
                            <div class="errorform">
                                <p>Parece que algo salio mal, veulva a intentarlo por favor.</p>
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-user"></i>
                                </span>
                                <input type="text" name="bookingname" class="form-control" autocomplete="off"
                                    placeholder="Su Nombre*" />
                            </div>
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-email2"></i>
                                        </span>
                                        <input type="text" name="bookingemail" class="form-control"
                                            autocomplete="off" placeholder="Su Correo*" />
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1 mt-sm-0">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-smartphone"></i>
                                        </span>
                                        <input type="text" name="bookingphone" class="form-control"
                                            autocomplete="off" placeholder="Su numero Telefonico" />
                                    </div>
                                </div>
                            </div>
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-birthday"></i>
                                        </span>
                                        <input type="text" name="bookingage" class="form-control"
                                            autocomplete="off" placeholder="Su Edad" />
                                    </div>
                                </div>
                            </div>
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-calendar2"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingdate" type="text" class="form-control datetimepicker"
                                        placeholder="Dia" readonly>
                                </div>
                            </div>
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-clock"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingtime" type="text" class="form-control timepicker"
                                        placeholder="Hora">
                                </div>
                            </div>
                            <textarea name="bookingmessage" class="form-control" placeholder="Su comentario"></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Agendar visita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendors -->
    <script src="{{ asset('dentco-html/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
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
    <!-- Custom Scripts -->
    <script src="{{ asset('dentco-html/js/app.js') }}"></script>
    <script src="{{ asset('dentco-html/js/app-shop.js') }}"></script>
    <script src="{{ asset('dentco-html/form/forms.js') }}"></script>

</body>

</html>
