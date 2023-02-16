<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Servicios</title>
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
</head>

<body class="shop-page">

    @include('menu_principal')


	<div class="page-content">

		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">Lo que ofrecemos</div>
					<h1>Nuestros Servicios</h1>
					<div class="h-decor"></div>
					<div class="text-center mt-4">
						<p>Todos estos servicios se prestan para que los pacientes disfruten de un estilo de vida saludable
							<br/> Contamos con la infraestructura necesaria para brindar una atención medica de calidad
							<br/>Nuestras instalaciones cuentan con el equipo médico necesario para hacer más eficiente nuestro trabajo
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/consultas.jpg') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Consultas Médicas: Presenciales y Teleconsulta</a></h5>
							<div class="h-decor"></div>
							<p>Ofrecemos especialidades en el área de: Medicina Interna, Pediatría, Ginecología y Obstetricia, Nutrición/Medicina de Estilo de vida saludable, Atención primaria en salud y Psiquiatría/Salud Mental.</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Domicilio.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Consultas Médicas a Domicilio</a></h5>
							<div class="h-decor"></div>
							<p>Este servicio está orientado a perfiles especiales de pacientes, que presenten dificultad para movilizarse</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Jornadas.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Jornadas Médicas Empresariales a Domicilio</a></h5>
							<div class="h-decor"></div>
							<p>Nuestro objetivo es el brindar atención médica de tipo preventiva y educativa, para la detección y tratamiento oportuno de enfermedades crónicas del personal, extendiendo consejería que aplique según sea el caso </p>
						</div>
					</div>

				</div>
			</div><br/><br/>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/TAIES.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">TAIES</a></h5>
							<div class="h-decor"></div>
								<p>Es una consulta médica presencial junto con asesoría virtual internacional por médico especialista. Obtienes una atención integral personalizada y de calidad, por profesionales nacionales y en el extranjero.<br><br>
									Especialidades:<br>
										- Endocrinología (USA) + Nutrición y Medicina de Estilo de Vida (ES)<br>
										- Endocrinología (USA) + Psiquiatría/Salud mental (ES)<br>
										- Hematooncología pediátrica (USA) + Atención primaria (ES)

								</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Control prenatal.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Control prenatal de bajo riesgo</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<!--<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/WWAD People.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Walk with a doc</a></h5>
							<div class="h-decor"></div>
							<p>
								Walk with a Doc es un programa de caminatas para todos los interesados en tomar medidas para un estilo de vida más saludable. ¿Qué mejor manera de terminar su fin de semana que de pie haciendo progresos para ayudar a su corazón y mejorar su salud general para vivir más tiempo? <br>
								Mientras camina a su propio ritmo, tendrá la oportunidad de hablar con sus médicos y aprender más sobre salud. Simplemente póngase un par de zapatos cómodos y camine - puede ir solo, con amigos, un compañero de trabajo, alumnos,  familia, mascotas o con un grupo. ¡Todos son bienvenidos!<br>
								Las caminatas se realizan los últimos domingos de cada mes en el Parque Bicentenario a las 4 pm (Punto de encuentro en pla de parqueo sur).
								<br>
								Más información: <b><a href="https://walkwithadoc.org/join-a-walk/locations/san-salvador-el-salvador/">https://walkwithadoc.org/join-a-walk/locations/san-salvador-el-salvador/</a></b>

							</p>
						</div>
					</div>-->
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Planificación familiar.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Planificación familiar</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>

				</div>
			</div>
			<br/><br/>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Citología.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Toma de citologías</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Control niño sano.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Control de niño sano</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Control nutricional.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Control nutricional</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>

				</div>
			</div><br/><br/>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Inyecciones.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Inyecciones</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Curaciones.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Curaciones y pequeña cirugía</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/EKG.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Toma y lectura de electrocardiograma</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>

				</div>
			</div><br/><br/>
			<div class="container">
				<div class="row col-equalH">
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Glucosa capilar.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Toma de glucosa capilar</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Terapias respiratorias.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Terapias respiratorias</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="service-card">
							<div class="service-card-photo">
								<a href="servicios.html"><img src="{{ asset('dentco-html/images/Vacunaciones.png') }}" class="img-fluid" alt=""></a>
							</div>
							<h5 class="service-card-name"><a href="servicios.html">Vacunaciones</a></h5>
							<div class="h-decor"></div>

						</div>
					</div>

				</div>
		</div><br/><br/><br/>
		<div class="container">
			<div class="row col-equalH">
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="servicios.html"><img src="{{ asset('dentco-html/images/Presión arterial.png') }}" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="servicios.html">Control de diabetes y presión arterial</a></h5>
						<div class="h-decor"></div>

					</div>
				</div>

			</div>
		</div><br/><br/><br/>
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
				<style>
					.z-padd{
						padding-left: 0px !important;
					}
				</style>
				<div class="col-sm-6 col-lg-4">

				</div>
				<div class="col-sm-6 col-lg-4">
					<h3>Nuestros Contactos</h3>
					<div class="h-decor"></div>
					<ul class="icn-list">
						<li><i class="icon-placeholder2"></i>Colonia San Ernesto,  Pasaje San Carlos, #154, San Salvador .
							<br>
							<a href="contact.html" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Obtener dirección</span><i class="icon-right-arrow"></i></a>
						</li>
						<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">2521-3705</span></span></b>
							<li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span></li>
						<li><i class="icon-black-envelope"></i><a href="mailto:unidadmedica@unidadmedicanr.com">unidadmedica@unidadmedicanr.com</a></li>
					</ul>
				</div>
			</div>
			<style>
				.z-padd{
					padding-left: 0px !important;
				}
			</style>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row text-center text-md-left">
					<div class="col-sm">Copyright © 2022 <a href="#">Unidad Medica NR</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
						<a href="#">Politicas de Privacidad</a></div>
					<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline"><li class="z-padd"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span></li></div>
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
