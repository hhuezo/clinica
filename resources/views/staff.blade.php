<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Nuestro Staff</title>
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
					<h1>Staff médico multidisciplinario</h1>
                    <div class="h-sub theme-color">Contamos con staff de profesionales bilingües, capacitados para brindar servicios de salud de alta calidad y eficiencia, con experiencia nacional e internacional. </div>
					<div class="h-decor"></div>
				</div>
			</div>
            <div class="row">
				<div class="col-sm">
					<div class="doctor-box text-center">
						<div class="doctor-box-photo">
							<a href="#"><img src="{{ asset('dentco-html/images/dragraciela.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<!--<h5 class="doctor-box-name"><a href="#">Dr. William Gardner</a></h5>
						<div class="doctor-box-position">Implantologist</div>-->
						<div class="doctor-box-text">
							<p class="text-justify">
								• Doctorado en Medicina - Universidad Dr. José Matías Delgado.<br/><br/>
								• Especialista en Geriatría y Gerontología por la Universidad Galileo de la República de Guatemala - Magna Cum Laude.<br/><br/>
								• Experta en el cuidado de la salud de las personas mayores de 60 años en todas sus esferas<br/><br/>
								• Idiomas: español, inglés, francés y portugués.<br/>  </p>
						</div>
						<div class="doctor-box-bottom">

							<div class="doctor-box-social">
								<!--<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="mailto:#" class="hovicon"><i class="icon-black-envelope"></i></a>-->
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="doctor-box text-center">
						<div class="doctor-box-photo">
							<a href="#"><img src="{{ asset('dentco-html/images/drajoselyn.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<!--<h5 class="doctor-box-name"><a href="#">Dr. William Gardner</a></h5>
						<div class="doctor-box-position">Implantologist</div>-->
						<div class="doctor-box-text">
							<p class="text-justify">
								• Dra. en Medicina General - Universidad Dr. José Matías Delgado.<br/><br/>
								• Especialidad en Psiquiatría y Salud Mental - Universidad de El Salvador y Hospital Nacional Psiquiátrico Dr. José Molina Martínez (2017 a 2019).<br/><br/>
								• Práctica privada desde 2020, con enfoque terapéutico Cognitivo Conductual.<br/><br/>
								• Idiomas: español e inglés.  </p>
						</div>
						<div class="doctor-box-bottom">

							<div class="doctor-box-social">
								<a href="https://www.instagram.com/dra.joselynmartinez/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="doctor-box text-center">
						<div class="doctor-box-photo">
							<a href="#"><img src="{{ asset('dentco-html/images/draadriana.jpg') }}" class="img-fluid" alt=""></a>
						</div>
						<!--<h5 class="doctor-box-name"><a href="#">Dr. William Gardner</a></h5>
						<div class="doctor-box-position">Implantologist</div>-->
						<div class="doctor-box-text">
							<p class="text-justify">
								• Master en Administración de empresas, con especialidad en mercadeo – Instituto Superior de Economía y Administración de Empresas. ISEADE El Salvador.<br/><br/>
								• Formación actual: Máster en gestión de salud digital – ADEN University<br/><br/>
								• Experiencia clínica en ginecologia y Obstetricia – New Jersey<br/><br/>
								• Experiencia administrativa – Asociación Americana del cáncer ACS-CAN, New Jersey.<br/><br/>
								• Médico General, graduada de la Universidad Dr. José Matías Delgado.<br/>
								• Idiomas: español, inglés y francés básico.  </p>
						</div>
						<div class="doctor-box-bottom">

							<div class="doctor-box-social">
								<!--<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="mailto:#" class="hovicon"><i class="icon-black-envelope"></i></a>-->
							</div>
						</div>
					</div>
				</div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="doctor-box text-center">
                    <div class="doctor-box-photo">
                        <a href="#"><img src="{{ asset('dentco-html/images/dravioleta.jpg') }}" class="img-fluid" alt=""></a>
                    </div>
                    <!--<h5 class="doctor-box-name"><a href="#">Dr. William Gardner</a></h5>
                    <div class="doctor-box-position">Implantologist</div>-->
                    <div class="doctor-box-text">
                        <p class="text-justify">
                            • Médico pediatra de Hospital Climosal.<br/><br/>
                            • Médico pediatra de Clínica Parroquial Cristo Redentor.<br/><br/>
                            • Médico pediatra de Clínica integral de atención a retornados.<br/><br/>
                            • Formación de especialidad en Pediatria en Universidad Dr. José Matías Delgado.<br/><br/>
							• Graduada de la Universidad Dr. José Matías Delgado.
                            • Idiomas: español, inglés y portugués básico.</p>
                    </div>
                    <div class="doctor-box-bottom">

                        <div class="doctor-box-social">
                            <!--<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="mailto:#" class="hovicon"><i class="icon-black-envelope"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="doctor-box text-center">
                    <div class="doctor-box-photo">
                        <a href="#"><img src="{{ asset('dentco-html/images/Dra. Jenny Amaya ok.jpeg') }}" class="img-fluid" alt=""></a>
                    </div>
                    <!--<h5 class="doctor-box-name"><a href="#">Dr. William Gardner</a></h5>
                    <div class="doctor-box-position">Implantologist</div>-->
                    <div class="doctor-box-text">
                        <p class="text-justify">
                            • Doctora en Medicina, graduada de la Universidad Dr. José Matías Delgado, El Salvador.<br/><br/>
                            • Máster en Ciencias Nutricionales, graduada de la Universidad Hebrea de Jerusalén, Israel.<br/><br/>
                            • Certificada por la Comisión Educacional para Médicos Graduados en el Extranjero (ECFMG por sus siglas en inglés) de Estados Unidos<br/><br/>
                            • Miembro activo del Colegio Médico de El Salvador.<br/><br/>
							• Formación actual: Certificación de Medicina de Estilo de Vida, impartida por el American College of Lifestyle Medicine, Estados Unidos.<br/><br/>
                            • Idiomas: español, inglés, portugués, francés, hebreo.</p>
                    </div>
                    <div class="doctor-box-bottom">

                        <div class="doctor-box-social">
                            <a href="https://www.facebook.com/dra.jennyamaya" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.instagram.com/dra.jennyamaya/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="col-sm">
                <div class="doctor-box text-center">
                    <div class="doctor-box-photo">
                        <a href="#"><img src="{{ asset('dentco-html/images/draalejandrar.jpg') }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="doctor-box-text">
                        <p class="text-justify">
                            • Formación de especialidad en hospital Monmouth Medical Center, Long Branch- New Jersey. E.E.U.U.<br/><br/>
                            • Formación actual: Hemato-oncologia pediátrica en Hospital Universitario de Virginia, E.E.U.U.<br/><br/>
                            • Miembro de la Asociación Americana de Pediatría.<br/><br/>
                            • Certificada por la Comisión Educacional para Médicos Graduados en el Extranjero (ECFMG por sus siglas en inglés) de Estados Unidos.<br/><br/>
                            • Graduada de la Universidad Dr. José Matías Delgado<br/><br/>
                            • Idiomas: español e ingles.  </p>
                    </div>
                    <div class="doctor-box-bottom">

                        <div class="doctor-box-social">
                            <!--<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="mailto:#" class="hovicon"><i class="icon-black-envelope"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm">
                <div class="doctor-box text-center">
                    <div class="doctor-box-photo">
                        <a href="#"><img src="{{ asset('dentco-html/images/dramonica.jpg') }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="doctor-box-text">
                        <p class="text-justify">
                            • Graduada de la Facultad de Medicina de la Universidad “Dr. José Matías Delgado”.<br/><br/>
                            • Residencia en Medicina Interna en Cleveland Clinic/Hospital Fairview, Cleveland, Ohio E.U.A.<br/><br/>
                            • Certificada por la American Board of Internal Medicine.<br/><br/>
                            • Formación Actual: Subespecialidad en endocrinología en la Universidad Case Western Reserve, Centro Médico Cleveland – Endocrinología, Diabetes y Metabolismo.<br/><br/>
                            • Idiomas: español, inglés e italiano.</p>
                    </div>
                    <div class="doctor-box-bottom">

                        <div class="doctor-box-social">
                            <!--<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="mailto:#" class="hovicon"><i class="icon-black-envelope"></i></a>-->
                        </div>
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
					<li><i class="icon-placeholder2"></i>Colonia San Ernesto,  Pasaje San Carlos, #154, San Salvador .
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
<style>
	.z-padd{
		padding-left: 0px !important;
	}
</style>
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
