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
                            <h2>Usuario</h2>
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
                                            <li><a href="{{ url('catalogo/especialidad/') }}">Especialidad</a></li>
                                            <li><a href="{{ url('catalogo/unidad/') }}">Unidades</a></li>
                                            @can('read empleados')
                                                <li><a href="{{ url('empleado/prestacion') }}">Prestación</a></li>
                                            @endcan
                                            <li><a>Catalogos<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    @can('read cargo_funcional')
                                                        <li><a href="{{ url('catalogo/cargo_funcional/') }}">Cargo funcional
                                                                mp</a></li>
                                                    @endcan
                                                    @can('read cargo_funcional')
                                                        <li><a href="{{ url('catalogo/cargo_nominal_hacienda/') }}">Cargo
                                                                nominal hacienda</a></li>
                                                    @endcan
                                                    @can('read nivel_academico')
                                                        <li><a href="{{ url('catalogo/nivel_academico/') }}">Nivel
                                                                academico</a></li>
                                                    @endcan
                                                    @can('catalogos empleados')
                                                        <li><a href="{{ url('catalogo/banco/') }}">Banco</a></li>
                                                        @can('read motivo_retiro')
                                                            <li><a href="{{ url('catalogo/motivo_retiro/') }}">Motivo de
                                                                    retiro</a>
                                                            </li>
                                                        @endcan
                                                        @can('read oficina')
                                                            <li><a href="{{ url('catalogo/oficina/') }}">Oficina</a></li>
                                                        @endcan

                                                        @can('read prevision')
                                                            <li><a href="{{ url('catalogo/prevision/') }}">Prevision</a></li>
                                                        @endcan

                                                        @can('read profesion')
                                                            <li><a href="{{ url('catalogo/profesion/') }}">Profesion</a></li>
                                                        @endcan

                                                        @can('read tipo_oficina')
                                                            <li><a href="{{ url('catalogo/tipo_oficina/') }}">Tipo oficina</a>
                                                            </li>
                                                        @endcan

                                                        @can('read tipo_plaza')
                                                            <li><a href="{{ url('catalogo/tipo_plaza/') }}">Tipo plaza</a></li>
                                                        @endcan

                                                        @can('read tipo_plaza')
                                                            <li><a href="{{ url('catalogo/sede/') }}">Sedes</a></li>
                                                        @endcan
                                                    @endcan

                                                </ul>
                                            </li>
                                            <li><a>Reportes<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li><a href="{{ url('reportes/reporte_general') }}"> Maestro de
                                                            personal</a></li>
                                                    <li><a href="{{ url('reportes/reporte_prestacion') }}">Reporte de
                                                            Prestaciones</a></li>
                                                    <li><a href="{{ url('reportes/reporte_contratos') }}">Imprimir
                                                            Contratos</a></li>
                                                    <li><a href="{{ url('reporte/ficha_empleado') }}">Ficha Empleado</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                </li>@endcan










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
                                    <img src="{{ asset('img/usuario.jpg') }}" alt="">Usuario
                                    <span class=" fa fa-angle-down"></span>
                                </a>

                            </li>


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