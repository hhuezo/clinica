<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Contacto</title>
    <!-- Stylesheets -->
    <link href="{{ asset('dentco-html/vendor/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
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
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
</head>

<body class="shop-page">

    @include('menu_principal')

    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="contact-map" id="googleMapContact1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.0401060340986!2d-89.21014443055181!3d13.708731870377013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6331b0e5d0d6d7%3A0x48b6890c846b26dc!2sUnidad%20M%C3%A9dica%20NR!5e0!3m2!1ses-419!2ssv!4v1652302206855!5m2!1ses-419!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section mt-0 bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="title-wrap">
                            <h5>Ubicacion</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-placeholder2"></i> Unidad Medica NR
                                <br>Colonia San Ernesto, Pasaje San Carlos # 154, San Salvador.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Información de Contacto</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-telephone"></i>Teléfono: <span class="theme-color"><span class="text-nowrap">2521-3705</span>
                                </span>
                                </span>
                            </li>
                            <li><i class="bi bi-whatsapp"></i>&nbsp;<a href="https://wa.me/70002063">WhatsApp: <span class="theme-color"><span class="text-nowrap">7000 - 2063</span></a>
                                </span>
                                </span>
                            </li>
                            <li><i class="icon-black-envelope"></i><a href="mailto:unidadmedica@unidadmedicanr.com">unidadmedica@unidadmedicanr.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Horarios Laborales</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-clock"></i>
                                <div>
                                    <div class="d-flex"><span>Lun-Vie</span><span class="theme-color">08:00 AM - 04:00
                                            PM</span></div>
                                    <div class="d-flex"><span>Sabado</span><span class="theme-color">08:00 AM - 12:00
                                            MD</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md col-lg-5">
                        <div class="pr-0 pr-lg-8">
                            <div class="title-wrap">
                                <h2>Contactese con Nosotros</h2>
                                <div class="h-decor"></div>
                            </div>
                            <div class="mt-2 mt-lg-4">
                                <p>Para preguntas generales por favor escribanos y le responderemos lo mas pronto
                                    posible</p>
                                <p class="p-sm">Los campos marcados con * son requeridos.</p>
                            </div>
                            <div class="mt-2 mt-md-5"></div>
                        </div>
                    </div>
                    <div class="col-md col-lg-6 mt-4 mt-md-0">
                        <form method="POST" action="{{ url('enviar_email') }}">
                            {{ Form::token() }}
                            <!-- <div class="successform">
                                <p>Su mensaje se envio correctamente</p>
                            </div>
                            <div class="errorform">
                                <p>Algo parece haber salido mal, intentelo de nuevo por favor.</p>
                            </div> -->
                            <div>
                                <input type="text" class="form-control" name="name" placeholder="Su Nombre*" required>
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="email" placeholder="Correo Electronico*" required>
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="phone" placeholder="Su Numero Telefonico" required>
                            </div>
                            <div class="mt-15">
                                <textarea class="form-control" name="message" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="mt-15">
                                <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                                <br>
                                @if(Session::has('g-recaptcha-response'))
                                <p class="alert {{Session::get('alert-class','alert-info')}}">
                                    {{Session::get('g-recaptcha-response')}}
                                </p>
                                @endif
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Enviar Mensaje</span><i class="icon-right-arrow"></i></button>
                            </div>
                        </form>
                        @include('sweet::alert')
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
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
                                <a href="https://www.facebook.com/unidadmedicanr" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>

                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="footer-social d-md-none d-lg-block">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>

                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
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
                            <a href="contact.html" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Obtener dirección</span><i class="icon-right-arrow"></i></a>
                        </li>
                        <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">2521-3705</span></span></b>
                        <li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span></li>
                        <li><i class="icon-black-envelope"></i><a href="mailto:unidadmedica@unidadmedicanr.com">unidadmedica@unidadmedicanr.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <style>
            .z-padd {
                padding-left: 0px !important;
            }
        </style>
        <div class="footer-bottom">
            <div class="container">
                <div class="row text-center text-md-left">
                    <div class="col-sm">Copyright © 2022 <a href="#">Unidad Medica
                            NR</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                        <a href="#">Politicas de Privacidad</a>
                    </div>
                    <div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">
                            <li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span>
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
    <!-- Recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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