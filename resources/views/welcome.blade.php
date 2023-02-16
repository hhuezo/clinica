<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Unidad Medica NR </title>
    <!-- Stylesheets -->
    <link href="{{ asset('dentco-html/vendor/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('dentco-html/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('dentco-html/images/LOGO.png') }}" type="image/x-icon">
    <link href='https://css.gg/awards.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900') }}" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk') }}"></script>
</head>

<body class="shop-page">
    @include('menu_principal')
    <div class="page-content">
        <!--section slider-->
        <div class="section mt-0">
            <!-- <div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
                <div class="quickLinks js-quickLinks">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col">
                                <a href="#" class="link">
                                    <i class="icon-placeholder"></i><span>Nuestra Ubicación</span></a>
                                <div class="link-drop p-0">
                                    <div id="googleMapDrop1" class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.0412183762217!2d-89.21020602076928!3d13.708462252300757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6331b0e5d0d6d7%3A0x48b6890c846b26dc!2sUnidad%20M%C3%A9dica%20NR!5e0!3m2!1ses-419!2ssv!4v1652302725765!5m2!1ses-419!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#" class="link">
                                    <i class="icon-clock"></i><span>Horarios</span>
                                </a>
                                <div class="link-drop">
                                    <h5 class="link-drop-title"><i class="icon-clock"></i>Dias y Horas Laborales</h5>
                                    <table class="row-table">
                                        <tr>
                                            <td><i>Lunes - Viernes</i></td>
                                            <td>08:00 AM - 4:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td><i>Sabado</i></td>
                                            <td> 08:00 AM - 12:00 MD</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col">
                                <a href="#" class="link">
                                    <i class="icon-pencil-writing"></i>Formulario de con
                                </a>
                                <div class="link-drop">
                                    <a href="{{url('contacto')}}" style="text-decoration: none;">
                                        <h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Contáctenos</h5>
                                    </a>

                                </div>
                            </div>
                            <div class="col">
                                <a href="#" class="link">
                                    <i class="icon-pencil-writing"></i><span>Agendar Cita</span>
                                </a>
                                <div class="link-drop">
                                    <a href="{{url('citas')}}" style="text-decoration: none;">
                                        <h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Cita</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Cerrar"></i></a></div>
                        </div>
                    </div>
                    <div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div> 
                </div>
            </div> -->
            <div id="mainSliderWrapper">
                <div class="loading-content">
                    <div class="inner-circles-loader"></div>
                </div>
                <div class="main-slider arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": false}'>
                    <div class="slide">
                        <div class="img--holder" data-animation="Booking a visitkenburns" data-bg="{{ asset('dentco-html/images/loop1.png') }}">
                        </div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <div class="slide-txt2" data-animation="fadeInDown" data-animation-delay="1s">Unidad Médica NR
                                            <br><b>Servicios médicos de calidad</b>
                                        </div>
                                        <div class="slide-btn"><a href="{{url('servicios')}}" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-animation="kenburns" data-bg="{{ asset('dentco-html/images/Lop3.png') }}"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <div class="slide-txt2" data-animation="fadeInDown" data-animation-delay="1s">Atención
                                            <br><b>para toda la familia</b>
                                        </div>
                                        <div class="slide-btn"><a href="{{url('servicios')}}" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-animation="kenburns" data-bg="{{ asset('dentco-html/images/loop2.png') }}"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">Unidad Médica NR
                                            <br><b>Ofrecemos seguros médicos</b>
                                        </div>
                                        <div class="slide-btn"><a href="https://www.nrseguros.com.sv/" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Saber
                                                    Más</span><i class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="img--holder" data-animation="kenburns" data-bg="{{ asset('dentco-html/images/LOGOloop3.png') }}"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="2s">
                                            <br><b></b>
                                        </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <div class="slide-btn"><a href="acerca.html" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section slider-->
        <!--section welcome-->
        <div class="section">
            <div class="container pt-lg-2">
                <div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
                    <div class="h-sub">Muchos años brindando el mejor servicio</div>
                    <h2 class="h1">Bienvenidos a <br class="d-sm-none">a <span class="theme-color">Unidad Medica
                            NR</span></h2>
                </div>
                <div class="row row justify-content-center">
                    <div class="col-md-6">
                        <div class="title-wrap hidden d-none d-lg-block text-center ">
                            <div class="h-sub">Contamos con muchos años de experiencia</div>
                            <h2 class="h1">Bienvenidos a <span class="theme-color">Unidad Medica NR</span></h2>
                        </div>
                        <div>
                            <p>Somos una clínica de especialidades enfocada en la curación y prevención de enfermedades
                                agudas y crónicas, a través de educación, innovación y atención médica con calidad
                                humana.</p>
                        </div>
                        <div class="mt-2 mt-md-4"></div>
                        <a href="contacto.html" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Contactar<i class="icon-right-arrow"></i></a>
                    </div>
                    <!--<div class="col-md-6 mt-3 mt-md-0"><img src="images/medicoin.jpg" class="w-100" alt="">
      <div class="video-wrap embed-responsive embed-responsive-16by9">
       <iframe src="https://www.youtube.com/embed/YZEvkRbQgHY?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe>
      </div>
     </div>-->
                </div>
            </div>
        </div>
        <!--//section welcome-->
        <!--section services-->
        <div class="section">
            <div class="container-fluid px-0">
                <div class="title-wrap text-center">
                    <div class="h-sub theme-color">Lo que ofrecemos</div>
                    <h2 class="h1">Nuestros Servicios</h2>
                    <div class="h-decor"></div>
                </div>
                <div class="row no-gutters services-box-wrap services-box-wrap-desktop">
                    <div class="col-4 order-1">
                        <div class="service-box-rotator js-service-box-rotator">
                            <div class="service-box service-box-greybg service-box--hiddenbtn">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="bi bi-clipboard2-pulse"></i></div>
                                    <div class="service-box-icon-bg"><i class="bi bi-clipboard2-pulse"></i></div>
                                    <h3 class="service-box-title">CONSULTAS MÉDICAS: PRESENCIALES</h3>
                                    <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                            <div class="service-box service-box-greybg service-box--hiddenbtn">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="bi bi-pc-display-horizontal"></i></div>
                                    <div class="service-box-icon-bg"><i class="bi bi-pc-display-horizontal"></i></div>
                                    <h3 class="service-box-title">CONSULTAS MÉDICAS: TELECONSULTA</h3>
                                    <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                            <div class="service-box service-box-greybg service-box--hiddenbtn">
                                <div class="service-box-caption text-center">
                                    <div class="service-box-icon"><i class="bi bi-activity"></i></div>
                                    <div class="service-box-icon-bg"><i class="bi bi-activity"></i></div>
                                    <h3 class="service-box-title">TAIES (Tele-Asesoría Internacional Especializada) y
                                        Jornadas Médicas
                                    </h3>
                                    <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 order-2">
                        <div class="service-box">
                            <div class="service-box-image" data-bg="{{ asset('dentco-html/images/ns.jpg') }}"></div>
                            <div class="service-box-caption text-center w-50 ml-auto">
                                <h3 class="service-box-title">Servicios</h3>

                                <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Saber Más</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters services-box-wrap services-box-wrap-mobile">
                    <div class="service-box-rotator js-service-box-rotator">
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="bi bi-clipboard2-pulse"></i></div>
                                <div class="service-box-icon-bg"><i class="bi bi-clipboard2-pulse"></i></div>
                                <h3 class="service-box-title">CONSULTAS MÉDICAS: PRESENCIALES</h3>
                                <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="bi bi-journal-medical"></i></div>
                                <div class="service-box-icon-bg"><i class="bi bi-journal-medical"></i></div>
                                <h3 class="service-box-title">CONSULTAS MÉDICAS: TELECONSULTA</h3>
                                <div class="btn-wrap"><a href="{{url('servicios')}}" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section services-->
        <!--section why choose us-->
        <div class="section">
            <div class="container">
                <div class="title-wrap text-center">
                    <!--<div class="h-sub theme-color">Mostrando la diferencia</div>-->
                    <h2 class="h1">El por qué escogernos</h2>
                    <div class="h-decor"></div>
                </div>
                <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                    <div class="col-md">
                        <div class="icn-text icn-text-wmax">
                            <div class="icn-text-circle"><i style="font-size: xx-large;	line-height: 81px;" class="bi bi-clipboard2-pulse"></i></div>
                            <div>
                                <h5 class="icn-text-title">Sistema digital</h5>
                                <!--<p>We provide comprehensive treatment planning and follow strict standards that ensure your surgery will go smoothly and provide the results you desire.</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="icn-text icn-text-wmax">
                            <div class="icn-text-circle"><i class="icon-team"></i></div>
                            <div>
                                <h5 class="icn-text-title">Innovación constante</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="icn-text">
                            <div class="icn-text-circle"><i class="icon-man"></i></div>
                            <div>
                                <h5 class="icn-text-title">Atención con calidad humana</h5>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
                <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                    <div class="col-md">
                        <div class="icn-text">
                            <div class="icn-text-circle"><i class="icon-dental-chair"></i></div>
                            <div>
                                <h5 class="icn-text-title">Instalaciones confortables</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md"><a href="staff.html"></a>
                        <div class="icn-text">
                            <div class="icn-text-circle"><i class="icon-star"></i></div>
                            <div>
                                <h5 class="icn-text-title">Staff multidisciplinario altamente capacitado</h5>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md">
                        <div class="icn-text">
                            <div class="icn-text-circle"><i class="icon-check-mark"></i></div>
                            <div>
                                <h5 class="icn-text-title">Precios accesibles</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--//section why choose us-->
        <!--section call us-->
        <div class="section mt-7">
            <div class="container">
                <div class="banner-call">
                    <div class="row no-gutters">
                        <div class="col-sm-5 col-lg-4 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right">
                            <img src="{{ asset('dentco-html/images/Servicios confiables.png') }}" alt="" class="shift-left" style="opacity: 45%;">
                        </div>
                        <div class="col-sm-7 col-lg-7 d-flex align-items-center order-1 order-sm-2">
                            <div class="zs-mb-none">
                                <div class="col-md-4 z-mb-none"></div>
                            </div>
                            <div class="text-center">
                                <h2>Busca un <br class="d-lg-none text-justify"> <span class="theme-color">Servicio
                                        Confiable?</span></h2>
                                <div class="h-decor"></div>
                                <p class="mt-sm-1 mt-lg-4 text-justify">Siempre estamos aceptando nuevos pacientes!
                                    Creemos en brindar la mejor atención posible a todos nuestros pacientes existentes y
                                    damos la bienvenida a nuevos pacientes para que prueben el servicio que tenemos para
                                    ofrecer. </p>
                                <div class="mt-3 mt-lg-4 ">
                                    <a href="https://wa.me/70002063" class="banner-call-phone">&nbsp;<i class="bi bi-whatsapp"></i>7000 - 2063</a>
                                </div>
                                <div class="mt-3 mt-lg-4">
                                    <i class="icon-telephone"></i><a href="tel:25213705" class="banner-call-phone">&nbsp;2521 - 3705</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section call us-->
        <!-- <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Walk with a Doc</div>
                <h1>Marcando la diferencia</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left pr-md-4">
                    <img src="{{ asset('dentco-html/images/WWAD People.png') }}" class="w-100" alt="">
                    <div class="row mt-3">
                        <div class="col-6">
                            <img src="{{ asset('dentco-html/images/content/about-03.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('dentco-html/images/content/about-04.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <p>Walk with a Doc es un programa de caminatas para todos los interesados en tomar medidas para un
                        estilo de vida más saludable.<br><br>Las caminatas se realizan los últimos domingos de cada mes
                        en el Parque Bicentenario a las 4 pm (Punto de encuentro en plaza de parqueo sur).
                    </p>
                    <div class="mt-3 mt-md-7"></div>
                    <h3>Más Información <span class="theme-color"></span></h3><a href="https://walkwithadoc.org/join-a-walk/locations/san-salvador-el-salvador/"><b>https://walkwithadoc.org/join-a-walk/locations/san-salvador-el-salvador/</a></b>
                </div>
            </div>
        </div> -->
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
                                <a href="https://goo.gl/maps/B6pbzLm8aK7mRtCF8 " target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/unidadmedicanr/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="footer-social d-md-none d-lg-block">
                                <a href="https://www.facebook.com/unidadmedicanr/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>

                                <a href="https://goo.gl/maps/B6pbzLm8aK7mRtCF8 " target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/unidadmedicanr/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
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
                        <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">2521-3705</span></span></b></li>
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
                                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Tu Nombre*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-email2"></i>
                                </span>
                                <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Correo Electronico*" />
                            </div>
                            <div class="input-group">
                                <span>
                                    <i class="icon-smartphone"></i>
                                </span>
                                <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Numero Telefonico" />
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
                        <h3>Formulario de Contacto</h3>
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
                                <input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Su Nombre*" />
                            </div>
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-email2"></i>
                                        </span>
                                        <input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Su Correo*" />
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-1 mt-sm-0">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-smartphone"></i>
                                        </span>
                                        <input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Su numero Telefonico" />
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row row-xs-space mt-1">
        <div class="col-sm-6">
         <div class="input-group">
          <span>
           <i class="icon-birthday"></i>
          </span>
          <input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Su Edad" />
         </div>
        </div>
       </div>-->
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-calendar2"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Dia" readonly>
                                </div>
                            </div>
                            <div class="input-group flex-nowrap mt-1">
                                <span>
                                    <i class="icon-clock"></i>
                                </span>
                                <div class="datepicker-wrap">
                                    <input name="bookingtime" type="text" class="form-control timepicker" placeholder="Hora">
                                </div>
                            </div>
                            <textarea name="bookingmessage" class="form-control" placeholder="Su comentario"></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-sm btn-hover-fill">Enviar</button>
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