    	<!--header-->
	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:25213705">2521-3705</a></div>
						<div class="header-phone"><span class="d-none d-sm-inline"><i class="bi bi-whatsapp"></i><span class="text-nowrap"><b><a href="https://wa.me/70002063">&nbsp;&nbsp;&nbsp; 7000-2063</a></b></span></div>
						<div class="header-info"><i class="icon-placeholder2"></i>Colonia San Ernesto,  Pasaje San Carlos # 154, San Salvador.</div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">nr.unidadmedica@gmail.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="https://www.facebook.com/unidadmedicanr/" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>

							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index.html" class="header-logo"><img src="{{ asset('dentco-html/images/LOGO.png') }}" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="index.html">Inicio</a>
										</li>
										<li class="nav-item">
											<a href="{{url('servicios')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Servicios</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{url('consultas')}}">Consultas Médicas</a></li>
												<li><a class="dropdown-item" href="{{url('consultas_domicilio')}}">Consultas a Domicilio</a></li>
												<li><a class="dropdown-item" href="{{url('jornadas')}}">Jornadas médicas empresariales</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="{{url('acerca')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Acerca de Nosotros</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{url('staff')}}">Nuestro Staff</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('alianzas')}}">Alianzas</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{url('contacto')}}">Contáctenos</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
				</div>
			</div>
		</div>
	</header>
	<!--quick links-->
	<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
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
							<i class="icon-pencil-writing"></i><span>Formulario de contacto</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Escribanos</h5>
							<form id="requestForm" method="post" novalidate>
								<div class="successform">
									<p>Su mensaje se envio correctamente!</p>
								</div>
								<div class="errorform">
									<p>Algo salio mal, vuelva a intentarlo.</p>
								</div>
								<div class="input-group">
									<span>
									<i class="icon-user"></i>
								</span>
									<input name="requestname" type="text" class="form-control" placeholder="Su nombre" />
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col">
										<div class="input-group">
											<span>
											<i class="icon-email2"></i>
										</span>
											<input name="requestemail" type="text" class="form-control" placeholder="Su correo electronico" />
										</div>
									</div>
									<div class="col">
										<div class="input-group">
											<span>
											<i class="icon-smartphone"></i>
										</span>
											<input name="requestphone" type="text" class="form-control" placeholder="Su Telefono" />
										</div>
									</div>
								</div>
								<br>
								<div class="input-group">
									<span>
									<i class="bi bi-chat-dots"></i>
								</span>
								<input name="duda" type="text" class="form-control" placeholder="Su consulta" />
								</div>
								<div class="text-right mt-2">
									<button type="submit" class="btn btn-sm btn-hover-fill">Enviar</button>
								</div>
							</form>
						</div>
					</div>


					<div class="col">
						<a href="#" class="link">
							<i class="icon-pencil-writing"></i><span>Agendar Cita</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Formulario para agendar cita</h5>
							<form id="requestForm" method="post" novalidate>
								<div class="successform">
									<p>Su mensaje fue enviado correctamente!</p>
								</div>
								<div class="errorform">
									<p>Lo sentimos parece que algo salio mal, vuelva a intentarlo.</p>
								</div>
								<div class="input-group">
									<span>
									<i class="icon-user"></i>
								</span>
									<input name="requestname" type="text" class="form-control" placeholder="Su Nombre Completo" />
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col">
										<div class="input-group">
											<span>
											<i class="icon-email2"></i>
										</span>
											<input name="requestemail" type="text" class="form-control" placeholder="Su Correo" />
										</div>
									</div>
									<div class="col">
										<div class="input-group">
											<span>
											<i class="icon-smartphone"></i>
										</span>
											<input name="requestphone" type="text" class="form-control" placeholder="Su numero de Telefono" />
										</div>
									</div>
								</div>
								<div class="selectWrapper input-group mt-1">
									<span>
									&bnsp;
								</span>
									<select name="requestservice" class="form-control">
												<option selected="selected" disabled="disabled">Seleccione un servicio</option>
												<option value="Consulta con Medicina General">Consulta con Medicina General</option>
												<option value="Consulta con Ginecología y Obstetricia">Consulta con Ginecología y Obstetricia</option>
												<option value="Consulta con Medicina Interna">Consulta con Medicina Interna</option>
												<option value="Consulta con Pediatría">Consulta con Pediatría</option>
												<option value="Consulta con Medicina de Estilo de Vida y Nutrición">Consulta con Medicina de Estilo de Vida y Nutrición</option>
												<option value="Consulta con Geriatría">Consulta con Geriatría</option>
												<option value="Consulta con Psiquiatría">Consulta con Psiquiatría	</option>
												<option value="Consulta TAIES">Consulta TAIES</option>
												<option value="Telemedicina">Telemedicina</option>
												<option value="Consulta domiciliaria (Geriatría)">Consulta domiciliaria (Geriatría)</option>
												<option value="Control de diabetes y presión arterial">Control de diabetes y presión arterial</option>
												<option value="Control prenatal de bajo riesgo">Control prenatal de bajo riesgo</option>
												<option value="Planificación familiar">Planificación familiar</option>
												<option value="Toma de citologías">Toma de citologías</option>
												<option value="Control de niño sano">Control de niño sano</option>
												<option value="Control nutricional">Control nutricional</option>
												<option value="Inyecciones">Inyecciones</option>
												<option value="Curaciones y pequeña cirugía">Curaciones y pequeña cirugía</option>
												<option value="Toma y lectura de electrocardiograma">Toma y lectura de electrocardiograma</option>
												<option value="Toma de glucosa capilar">Toma de glucosa capilar</option>
												<option value="Terapias respiratorias">Terapias respiratorias</option>
												<option value="Vacunaciones">Vacunaciones</option>
											</select>
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col-sm-6">
										<div class="input-group flex-nowrap">
											<span>
												<i class="icon-calendar2"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Fecha" readonly>
											</div>
										</div>
									</div>
									<div class="col-sm-6 mt-1 mt-sm-0">
										<div class="input-group flex-nowrap">
											<span>
													<i class="icon-clock"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requesttime" type="text" class="form-control timepicker" placeholder="Hora" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="text-right mt-2">
									<button type="submit" class="btn btn-sm btn-hover-fill">Enviar</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Cerrar"></i></a></div>
				</div>
			</div>
			<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
		</div>
	</div>
	<!--//quick links-->
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html">Inicio</a>
						<a href="servicios.html">Servicios</a>
						<span>Consultas médicas</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
