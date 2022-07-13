@section('title') 
SRB - Inicio
@endsection 
@extends('layouts.main')
@section('style')
<!-- Importaciones css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            

        </div>
        

    </div>
</div>
<div class="contentbar">                
    <!-- Inicio row -->
    <div class="row">
        <!-- Inicio col -->
      
        @yield('content2')

  
    </div> 
    <br> </br>
             <!-- COLUMNNA ANIMALES -->
             <div class="row">
                 <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>13<i class="feather icon-arrow-down text-danger ml-1"></i><img src="assets/images/bovinos/partos.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">Partos</p>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->
                <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>4<i class="feather icon-arrow-up text-success ml-1"></i><img src="assets/images/bovinos/abortos.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">Abortos</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->
                <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>4<i class="feather icon-arrow-up text-success ml-1"></i><img src="assets/images/bovinos/enfermedades.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">Enfermedades</p>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->
                <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>4<i class="feather icon-arrow-up text-success ml-1"></i><img src="assets/images/bovinos/vita.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">vitaminas</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->
                <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>13<i class="feather icon-arrow-down text-danger ml-1"></i><img src="assets/images/bovinos/animales.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">Animales</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->
                <!-- Inicio col -->
                <div class="col-lg-12 col-xl-4">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <h4>13<i class="feather icon-arrow-down text-danger ml-1"></i><img src="assets/images/bovinos/animales.png " width="50" height="50"></h4>
                                    <p class="font-14 mb-0">Muertes</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin col -->



</div>

         
<!-- fin COLUMNNA ANIMALES -->
@endsection 
@section('script')
<!-- Apex js -->


<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- jVector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Custom Dashboard js -->  
<script src="{{ asset('assets/js/custom/custom-dashboard.js') }}"></script>

<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>  
<script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-calender.js') }}"></script>
@endsection 