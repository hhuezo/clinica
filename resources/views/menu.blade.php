<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clinica</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">


                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('img/usuario.jpg') }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenid@,</span>
                            <h2>{{ auth()->user()->email }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Clinica</h3>
                            <ul class="nav side-menu">
                                @can('read users')
                                    <li><a><i class="fa fa-users"></i> Seguridad <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{ url('seguridad/user/') }}">Usuario</a></li>
                                            <li><a href="{{ url('seguridad/role/') }}">Roles</a></li>
                                            <li><a href="{{ url('seguridad/permission/') }}">Permisos</a></li>
                                        </ul>
                                    </li>
                                @endcan

                                @can('digitador')
                                    <li><a><i class="fa fa-database"></i> Inmuebles <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{ url('inmueble/inmueble') }}">inmueble</a></li>
                                            <li><a href="{{ url('empresa/empresa') }}">empresa</a></li>
                                            <li><a href="{{ url('poste/poste') }}">poste</a></li>
                                            <li><a href="{{ url('valla/valla') }}">valla</a></li>
                                            <li><a href="{{ url('antena/antena') }}">antena</a></li>
                                        </ul>
                                    </li>
                                @endcan


                                @can('read users')
                                    <li>
                                        <a><i class="fa fa-folder"></i> Catalogos<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{ url('catalogo/preguntas/') }}">Preguntas</a></li>
                                            <li><a href="{{ url('catalogo/especialidad/') }}">Especialidad</a></li>
                                            <li><a href="{{ url('catalogo/doctor/') }}">Doctor</a></li>
                                            <li><a href="{{ url('catalogo/horario/') }}">Horario</a></li>
                                            <li><a href="{{ url('admin_citas') }}">Citas</a></li>


                                        </ul>
                                    </li>

                                    <!-- <li><a href="{{url('citas/listado_citas_secretaria')}}">Listado de Citas</a></li> -->
                                    <li><a href="{{url('pacientes')}}">Listado de Pacientes</a></li>
                                @endcan
                                @can('citas doctor')
                                    <li> <a href="{{ url('/home') }}"> <i class="fa fa-book"></i>Agenda</a></li>
                                    <li> <a href="{{ url('admin_citas') }}"> <i class="fa fa-folder"></i>Citas</a></li>
                                    <!--<li><a href="{{ url('suspender_citas') }}"> Suspender Citas</a></li>-->
                                @endcan


                            </ul>
                        </div>
                        <!-- sidebar menu -->
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('img/usuario.jpg') }}"
                                        alt="">{{ auth()->user()->email }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">



                                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }} <i style="padding-left: 81%;"
                                                class="fa fa-sign-out"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                @yield('contenido') <div class="x_content"></div>

            </div>
            <!-- /page content -->


        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}"></script>

    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>

    <!-- mascara de entrada -->
    <script src="{{ asset('vendors/input-mask/jquery.inputmask.js') }}"></script>





</body>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
        //Dui
        $('[data-mask]').inputmask()
    });
</script>

</html>
