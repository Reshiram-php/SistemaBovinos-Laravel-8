@section('title') 
SRB - Estados
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
            <h4 class="page-title">Estado de Datos</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="#">SRB</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Estado</li>
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
            </div>
            <div class="card-body">
                <div id="chat-ALL"></div>
            </div>
        </div>
    </div>
        <!-- grafico 2 -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-header">
                
            </div>

            <div class="card-body">
            
                <div id="chart_ruega"></div>
            </div>
        </div>
    </div>
    
    <!-- fin row -->
</div>

<!-- FIN Contentbar -->

@endsection
@section('script')
<!-- Piety Chart js -->





<script>
  var options = {
          series: [14, 12, 11, 35, 29],
          chart: {
          height: 490,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
              margin: 5,
              size: '30%',
              background: 'transparent',
              image: undefined,
            },
            dataLabels: {
              name: {
                show: false,
              },
              value: {
                show: false,
              }
            }
          }
        },
        title: {
          text: 'Estadistica Global',
          align: 'left'
        },
        colors: ['#20EB14', '#0084ff', '#F2850C', '#DB0501', '#0084ff'],
        labels: ['Ternero', 'Torete', 'Vacona', 'Toro','Vaca'],
        legend: {
          show: true,
          floating: true,
          fontSize: '16px',
          position: 'left',
          offsetX: 40,
          offsetY: 30,
          labels: {
            useSeriesColors: true,
          },
          markers: {
            size: 0
          },
          formatter: function(seriesName, opts) {
            return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
          },
          itemMargin: {
            vertical: 3
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
                show: false
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chat-ALL"), options);
        chart.render();
      
</script> 

<script>


    
var options = {
          series: [17, 4, 13, 13, 22],
          chart: {
          width: 380,
          type: 'pie',
        },
        title: {
          text: 'Estadistica Global',
          align: 'left'
        },
        labels: ['Animales', 'Muertes', 'Vacunaciones', 'Enfermedades', 'Vitaminass'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart_ruega"), options);
        chart.render();
      
</script>

<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
<!-- Custom CRM Project js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-chart-apex.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-crm-projects.js') }}"></script>

@endsection