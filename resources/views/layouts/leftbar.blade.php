<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <div class="vertical-menu-icon">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="logobar">
                        <a href="{{url('/')}}" class="logo logo-small"><img
                                src="{{ asset('assets/images/banner2.svg')}}" class="img-fluid" alt="logo"></a>
                    </div>
                    <a class="nav-link active" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm" role="tab"
                        aria-controls="v-pills-crm" aria-selected="true"><img
                            src="{{ asset('assets/images/svg-icon/home1.svg') }}" class="img-fluid" alt="CRM"
                            data-toggle="tooltip" data-placement="top" title="INICIO"></a>
                    <a class="nav-link" id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce"
                        role="tab" aria-controls="v-pills-ecommerce" aria-selected="false"><img
                            src="{{ asset('assets/images/svg-icon/insertar.svg') }}" class="img-fluid" alt="eCommerce"
                            data-toggle="tooltip" data-placement="top" title="Gestión del Ganado"></a>

                    @canany(['ventas.index', 'clientes.index', 'usuarios.index','permisos.index'])
                    <a class="nav-link" id="v-pills-hospital-tab" data-toggle="pill" href="#v-pills-hospital" role="tab"
                        aria-controls="v-pills-hospital" aria-selected="false"><img
                            src="{{ asset('assets/images/svg-icon/ventas.svg') }}" class="img-fluid" alt="Hospital"
                            data-toggle="tooltip" data-placement="top" title="Administración"></a>

                    @endcanany


                </div>
            </div>
            <div class="vertical-menu-detail">
                <div class="logobar">
                    <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset('assets/images/logo2.svg')}}"
                            class="img-fluid" alt="logo"></a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-crm" role="tabpanel"
                        aria-labelledby="v-pills-crm-tab">
                        <ul class="vertical-menu">
                            <li>
                                <h5 class="menu-title">Sistema de Gestión Bovina</h5>
                            </li>
                            <li><a href="{{url('/home')}}"><img src="{{asset('assets/images/svg-icon/dashboard.svg') }}"
                                        class="img-fluid" alt="dashboard">Inicio</a></li>
                            <li><a href="{{url('/analisis')}}"><img
                                        src="{{ asset('assets/images/svg-icon/reports.svg') }}" class="img-fluid"
                                        alt="projects">Analisis</a></li>
                            <li><a href="{{url('/estado')}}"><img src="{{ asset('assets/images/svg-icon/charts.svg') }}"
                                        class="img-fluid" alt="leads">Estado</a></li>
                            <li><a href="{{url('/notificaciones')}}"><img
                                        src="{{ asset('assets/images/svg-icon/notifications.svg') }}" class="img-fluid"
                                        alt="leads">
                                    <span class="badge badge-warning pull-right">{{
                                        count(auth()->user()->unreadNotifications) }}</span>
                                    Notificaciones
                                </a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-ecommerce" role="tabpanel"
                        aria-labelledby="v-pills-ecommerce-tab">
                        <ul class="vertical-menu">
                            <li>
                                <h5 class="menu-title">Menu </h5>
                            </li>
                            <li>
                                <a href="javaScript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/ganado.svg') }}" class="img-fluid"
                                        alt="frontend"><span>Ganado</span>
                                </a>
                                <ul class="vertical-submenu">
                                    <li>
                                        <a href="{{url('/animal')}}">Animales
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/razas')}}">Razas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javaScript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/reproduccion.svg') }}" class="img-fluid"
                                        alt="frontend"><span>Reproducción</span>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/monta')}}">Montas o Inseminaciones</a></li>
                                    <li><a href="{{url('/embarazo')}}">Gestación</a></li>
                                    <li><a href="{{url('/partos')}}">Partos</a></li>
                                    <li><a href="{{url('/abortos')}}">Aborto</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="javaScript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/leche.svg') }}" class="img-fluid"
                                        alt="frontend"><span>Producción</span>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/ordeno')}}">Registro de Ordeño</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="javaScript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/nutricion.svg') }}" class="img-fluid"
                                        alt="frontend"><span>Nutrición</span>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/peso')}}">Registro de Peso</a></li>
                                    <li><a href="{{url('/nutricion')}}">Nutrición</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="javaScript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/sanidad.svg') }}" class="img-fluid"
                                        alt="backend"><span>Sanidad</span>
                                </a>
                                <ul class="vertical-submenu">
                                    <li><a href="{{url('/listadoen')}}">Listado de Enfermedades</a></li>
                                    <li><a href="{{url('/enfermedades')}}">Registro de Enfermedades</a></li>
                                    <li><a href="{{url('/listadova')}}">Listado de Vacunas</a></li>
                                    <li><a href="{{url('/vacunas')}}">Vacunación</a></li>
                                    <li><a href="{{url('/actividades')}}">Actividades</a></li>

                                </ul>
                            </li>
                            @can('muertes.index')
                            <li>
                                <a href="{{url('/muertes')}}"><img
                                        src="{{ asset('assets/images/svg-icon/muertes.svg') }}" class="img-fluid"
                                        alt="frontend"><span> Muertes</span>
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </div>



                    <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel"
                        aria-labelledby="v-pills-hospital-tab">
                        <ul class="vertical-menu">
                            <li>
                                <h5 class="menu-title">Control Personas</h5>
                            </li>
                            @can('ventas.index')
                            <li><a href="{{url('/ventas')}}"><img
                                        src="{{ asset('assets/images/svg-icon/calender.svg') }}" class="img-fluid"
                                        alt="appointments">Ventas</a></li>
                            @endcan
                            @can('clientes.index')
                            <li><a href="{{url('/clientes')}}"><img
                                        src="{{ asset('assets/images/svg-icon/doctor.svg') }}" class="img-fluid"
                                        alt="doctors">Clientes</a></li>
                            @endcan
                            @can('usuarios.index')
                            <li><a href="{{url('/usuarios')}}"><img
                                        src="{{ asset('assets/images/svg-icon/doctor.svg') }}" class="img-fluid"
                                        alt="doctors">Usuarios</a></li>
                            @endcan
                            @can('permisos.index')
                            <li><a href="{{url('/permisos')}}"><img
                                        src="{{ asset('assets/images/svg-icon/settings.svg') }}" class="img-fluid"
                                        alt="doctors">permisos</a></li>
                            @endcan
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>