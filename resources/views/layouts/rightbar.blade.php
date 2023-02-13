<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="{{url('/')}}" class="mobile-logo"><img src="{{ asset('assets/images/logo2.svg') }}"
                            class="img-fluid" alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}"
                                        class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}"
                                        class="img-fluid menu-hamburger-vertical" alt="verticle">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/menu.svg') }}"
                                        class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                        class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('assets/images/svg-icon/menu.svg') }}"
                                        class="img-fluid menu-hamburger-collapse" alt="menu">
                                    <img src="{{ asset('assets/images/svg-icon/close.svg') }}"
                                        class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="infobar">
                    <ul class="list-inline mb-0">

                        <li class="list-inline-item">
                            <div class="notifybar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                            src="{{ asset('assets/images/svg-icon/notifications.svg') }}"
                                            class="img-fluid" alt="notifications">
                                        @if(count(auth()->user()->unreadNotifications))
                                        <span class="live-icon">
                                            {{ count(auth()->user()->unreadNotifications) }}
                                        </span>
                                        @endif
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                        <div class="notification-dropdown-title">
                                            <h4>Notificaciones</h4>
                                        </div>
                                        <ul class="list-unstyled">
                                            @foreach (auth()->user()->unreadNotifications()->take(4)->get() as
                                            $notification )
                                            <li class="media dropdown-item">
                                                <a href="{{ route('notificationsb',$notification->id) }}">
                                                    <span class="action-icon badge badge-success-inverse">N</span>
                                                    <div class="media-body">
                                                        <h5 class="action-title">{{ $notification->data['description']
                                                            }}
                                                        </h5>
                                                        <p><span class="timing">fecha {{
                                                                date("Y-m-d", strtotime( $notification->data['start']));
                                                                }}</span></p>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach

                                        </ul>
                                        <a href="{{ route('markAsRead') }}" class="dropdown-item dropdown-footer"
                                            style="text-align: center">

                                            marcar como leidas</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="profilebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="profilelink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                            src="{{ asset('assets/images/users/profile.svg') }}" class="img-fluid"
                                            alt="profile"><span class="live-icon">{{ Auth::user()->name }}</span><span
                                            class="feather icon-chevron-down live-icon"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                                <h5>{{ Auth::user()->name }}</h5>
                                            </div>
                                        </div>
                                        <div class="userbox">
                                            <ul class="list-unstyled mb-0">
                                                <li class="media dropdown-item">
                                                    <a class="profile-icon" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();"><img
                                                            src="{{ asset('assets/images/svg-icon/logout.svg') }}"
                                                            class="img-fluid">
                                                        Cerrar Sesión</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Fin col -->
        </div>
        <!-- fin row -->
    </div>
    <!-- End Topbar -->
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2022 Ciencias Veterinarias - Todos los derechos reservados.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>
