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
    						<div class="header-info"><i class="icon-placeholder2"></i>Colonia San Ernesto, Pasaje San Carlos # 154, San Salvador.</div>
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
    			<div class="col-auto ml-auto d-flex align-items-center">
    				@if (!auth()->user())
    				<a href="{{url('login')}}" class="hovicon">Ingresar</a>
    				@else


    				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    					{{ __('Salir') }} <i style="padding-left: 81%;" class="fa fa-sign-out"></i>
    				</a>
    				@endif
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
    											<a class="nav-link" href="{{ url('/') }}">Inicio</a>
    										</li>
    										<li class="nav-item">
    											<a href="{{url('servicios')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Servicios</a>
    											<ul class="dropdown-menu">
    												<li><a class="dropdown-item" href="{{url('consultas')}}">Consultas Médicas</a></li>
    												<li><a class="dropdown-item" href="{{url('consultas_domicilio')}}">Consultas a Domicilio</a></li>
    												<li><a class="dropdown-item" href="{{url('jornadas')}}">Jornadas médicas empresariales</a></li>
    												<li><a class="dropdown-item" href="{{url('citas')}}">Citas</a></li>
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
    							<i class="icon-pencil-writing"></i>Formulario de contacto
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
    	</div>
    	<!--//quick links-->
    	<div class="page-content">
    		<?php
			if (isset($texto)) {
			?>
    			<!--section-->
    			<div class="section mt-0">
    				<div class="breadcrumbs-wrap">
    					<div class="container">
    						<div class="breadcrumbs">
    							<a href="index.html">Inicio</a>
    							<a href="servicios.html">Servicios</a>
    							<span>{{$texto}}</span>
    						</div>
    					</div>
    				</div>
    			</div>
    		<?php  } ?>
    		<!--//section-->
    		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    			@csrf
    		</form>