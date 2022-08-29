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

<body class="shop-page">


    @include('menu_principal')





    <div class="page-content">



        <!--//section-->


        <div class="section mt-0">
            <div class="breadcrumbs-wrap">
                <div class="container">
                    <div class="breadcrumbs">
                        <h1>{{$especialidad->Nombre}}</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="section page-content-first">
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
                                            data-target="#submenu1">Horarios</a>
                                        <div class="collapse show" id="submenu1">
                                            <ul class="flex-column nav">
                                                <li class="nav-item"><a class="nav-link" href="">Orthodontics</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link active" href="">White
                                                        Fillings</a></li>
                                                <li class="nav-item"><a class="nav-link" href="">Porcelain
                                                        Veneers</a></li>
                                                <li class="nav-item"><a class="nav-link" href="">Teeth
                                                        Whitening</a></li>
                                                <li class="nav-item"><a class="nav-link" href="">Inlays &amp;
                                                        Onlays</a></li>
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


</body>

</html>
