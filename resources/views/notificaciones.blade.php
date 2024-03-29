@section('title')
SGB - Notificaciones
@endsection
@extends('layouts.main')
@section('style')
<!-- Dragula css -->
<link href="{{ asset('assets/plugins/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">

    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Notificaciones</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="#">SGB</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Notificaciones</li>
                </ol>
            </div>
        </div>

    </div>


</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">

        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header">
                    Notificaciones no leídas
                </div>
                <div class="card-body">

                    @if (auth()->user())
                    @forelse ($postnotifications as $n )
                    <div class="alert alert-warning">
                        <p>titulo: {{ $n->data['title'] }}</p>
                        <p>descripción: {{ $n->data['description'] }}</p>
                        <p>fecha: {{date("Y-m-d", strtotime( $n->data['start']))}}</p>
                        <a href="{{ route('individualmark', $n->id )}}" class="btn btn-sm btn-dark">marcar como
                            leido</a>
                    </div>
                    @if($loop->last)
                    <a href="{{ route('markAsRead') }}">marcar todos como leidos</a>
                    @endif
                    @empty
                    Sin notificaciones por leer
                    @endforelse

                    @endif
                </div>
            </div>
        </div>
        <!-- grafico 2 -->


        <!-- fin row -->
    </div>

    <!-- FIN Contentbar -->

    @endsection
    @section('script')
    <!-- Piety Chart js -->




    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <!-- Custom CRM Project js -->
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-chart-apex.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-crm-projects.js') }}"></script>

    @endsection