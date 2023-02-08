<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Jornadas</title>
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
</head>

<body class="shop-page">

    @include('menu_principal')

    <!--//quick links-->
    <div class="page-content">

        <!--section-->
        <div class="section page-content-first">
            <div class="container mt-6">
                <div class="row">
                    <div class="col-md">
                        <ul class="services-nav flex-column flex-nowrap">
                            <li class="nav-item">
                                <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Jornadas médicas</a>
                                <div class="collapse show" id="submenu1">
                                    <ul class="flex-column nav">
                                        <li class="nav-item"><a class="nav-link" href="">Jornadas Médicas
                                                Empresariales a Domicilio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="">Jornada Médica
                                                Educativa</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                            <div class="col-auto col-sm col-md-auto">
                                <div class="contact-box contact-box-1">
                                    <h5 class="contact-box-title">Horas Laborales</h5>
                                    <ul class="icn-list">
                                        <li><i class="icon-clock"></i>Lun - Vie 08:00 AM - 04:00 PM
                                            <br>Sabado 08:00 AM - 12:00 MD
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto col-sm col-md-auto">
                                <div class="contact-box contact-box-2">
                                    <h5 class="contact-box-title">Informacion de Contacto</h5>
                                    <ul class="icn-list">
                                        <li><i class="icon-telephone"></i>
                                            <div class="d-flex flex-wrap">
                                                <span>Telefono:&nbsp;&nbsp;</span>
                                                <span>2521-3705
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icon-telephone"></i>
                                            <div class="d-flex flex-wrap">
                                                <b><span class="phone"><span class="text-nowrap"><a href="https://wa.me/70002063">WhatsApp:
                                                                7000-2063</a></span></span></b>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="question-box mt-3">
                            <h5 class="question-box-title">Preguntele a los expertos</h5>
                            <form method="POST" action="{{ url('enviar_email') }}">
                                {{ Form::token() }}
                                <div class="successform">
                                    <p>Su mensaje se ha enviado correctamente</p>
                                </div>
                                <div class="errorform">
                                    <p>Parece que algo ha salido mal, intentelo de nuevo por favor.</p>
                                </div>
                                <input type="text" class="form-control" name="name" placeholder="Su nombre*" required>
                                <input type="text" class="form-control" name="email" placeholder="Su correo electronico*" required>
                                <input type="text" class="form-control" name="phone" placeholder="Telefono" required>
                                <textarea class="form-control" name="message" placeholder="Su pregunta*" required></textarea>
                                <button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Enviar</span><i class="icon-right-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                        <div class="title-wrap">
                            <h1>Jornadas Médicas</h1>
                        </div>
                        <div class="service-img">
                            <img src="{{ asset('dentco-html/images/consultaser.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="pt-2 pt-md-4">
                            <p> Nuestro objetivo es el brindar atención médica de tipo preventiva y educativa, para la
                                detección y tratamiento oportuno de enfermedades crónicas del personal, extendiendo
                                consejería que aplique según sea el caso</p><br /><br />
                            <p>Jornada Médica Educativa.<br /><br />
                                Brindamos charlas educacionales sobre temas de interés solicitados, bajo sistema de
                                programación del grupo de asistentes, guardando los estándares de bioseguridad COVID-19,
                                destacando temas como:</p>
                            <div class="mt-0 mt-lg-4"></div>
                            <div class="mt-3"></div>
                            <ul class="numbered-list-lg">
                                <li>Estilos de vida saludables</li>

                                <li>Salud de la Mujer</li>

                                <li>Salud ocupacional </li>

                                <li>Primeros auxilios </li>

                                <li>Cuidados post COVID en casa o dentro de la oficina</li>

                                <li>Depresión y ansiedad </li>

                                <li>Algún tema de salud de interés específico para la empresa </li>
                            </ul><br /><br />
                            <div class="mt-0 mt-lg-4"></div>
                            <div class="mt-3"></div>
                            <div class="mt-3"></div>
                            <p>Jornada Médica para Atención Preventiva de Salud.<br /><br />
                                Brindamos chequeos médicos generales con enfoque preventivo, recomendaciones y/o
                                tratamientos médicos a aquellos pacientes que lo requieran, incluyendo la toma de
                                medidas antropométricas (Peso, talla, IMC), signos vitales (Presión arterial, ritmo
                                cardíaco, frecuencia respiratoria, saturación de oxígeno, temperatura) y detección de
                                factores de riesgo de enfermedades crónicas, densitometría ósea (sujeto a disponibilidad
                                de personal especializado), lectura de exámenes, reporte médico individual con
                                diagnósticos y plan de tratamiento, reporte general dirigido al encargado de Recursos
                                Humanos para el uso que estime conveniente.</p>
                            <!--<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
                                <div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span>Why do I need a Filling?</a>
                                        <div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
                                            <div>
                                                <p>If the cavity isn’t repaired, this cavity will continue to expand—eventually entering into your nerve canal. This can be excruciatingly painful. However, it can also lead to dire problems such as abscess or infection. Replacing old fillings or fixing chipped teeth can also be required. The most important reason to fix your cavity early on is to avoid a painful and costly root canal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span>Composite Filling</a>
                                        <div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>Doloremque nihil sed ratione ipsa molestiae maxime necessitatibus dolorem in, quasi delectus minima tempora! Tempora quo beatae, id temporibus est sint veritatis suscipit ullam ipsa facilis, sunt dignissimos, perferendis placeat, reiciendis quos ad officia mollitia velit explicabo? Illum nobis minus, doloremque tempore animi tenetur, harum sint quas voluptatum neque tempora dolorum laborum nisi suscipit vel nesciunt, fuga eos iusto maiores corrupti quaerat, deserunt modi culpa totam? Iure voluptates esse, laborum quos similique accusamus neque corporis reiciendis saepe.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span>How do I know if my teeth are healthy?</a>
                                        <div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>Nulla, ab quis perferendis tempore natus soluta, saepe, ullam ducimus at dignissimos nihil maiores! Perspiciatis pariatur itaque id sunt perferendis veritatis, adipisci quam voluptatum facilis. Similique saepe aspernatur cumque esse.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
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
                        <li><i class="icon-black-envelope"></i><a href="mailto:nr.unidadmedica@gmail.com">nr.unidadmedica@gmail.com</a></li>
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
                            <div class="row row-xs-space mt-1">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span>
                                            <i class="icon-birthday"></i>
                                        </span>
                                        <input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Su Edad" />
                                    </div>
                                </div>
                            </div>
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