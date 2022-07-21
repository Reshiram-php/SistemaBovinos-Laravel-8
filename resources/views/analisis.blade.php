@section('title')
SRB - Analisis
@endsection
@extends('layouts.main')
@section('style')
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('rightbar-content')

<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">Analisis de Datos</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">

          <li class="breadcrumb-item"><a href="#">SRB</a></li>
          <li class="breadcrumb-item active" aria-current="page">Analisis</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<form action="{{route('charts')}}">


<div class="contentbar">
  <!-- Start row -->
  <div class="row">
    <!-- GRAFICO 1 -->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          
            <label for="select-week">Agrupar resultados por</label>
            <select name="peso[groupBy]" id="select-week" class="form-control">
              <option @if ($pesoGroupBy ==='Month' ) selected @endif value="Month">Mes</option>
              <option @if ($pesoGroupBy === 'WW' ) selected @endif value="WW">Semana</option>
              <option @if ($pesoGroupBy ==='YYYY' ) selected @endif value="YYYY">Año</option>
            </select>
            <!-- Filtro 1 -->
            <div class="row f input-daterange mt-3">

              <div class="col-md-4">
                <input type="date" name="peso[start]" id="from_date1" class="form-control" placeholder="Desde" @if($pesoStart) value="{{$pesoStart}}" @endif />
              </div>
              <div class="col-md-4">
                <input type="date" name="peso[end]" id="to_date1" class="form-control" placeholder="Hasta" @if($pesoEnd) value="{{$pesoEnd}}" @endif />
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
              </div>
            </div>          
        </div>
        <div class="card-body">
          <div id="grafico-peso"></div>
        </div>
      </div>
    </div>
    <!-- INGRESAR TABLA  1-->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          <label for="select-week">TABLA DE DATOS GANANCIA DE PESO</label>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="edit-btn">
            <thead>
              <th>Código Animal</th>
              <th>Peso Actual</th>
              <th>Peso Anterior</th>
              <th>Fecha Registro</th>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
      <!-- GRAFICO 2 -->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          
            <label for="select-week">Agrupar resultados por</label>
            <select name="peso[groupBy]" id="select-week" class="form-control">
              <option @if ($pesoGroupBy ==='Month' ) selected @endif value="Month">Dia</option>
              <option @if ($pesoGroupBy === 'WW' ) selected @endif value="WW">Semana</option>
              <option @if ($pesoGroupBy ==='YYYY' ) selected @endif value="YYYY">Año</option>
            </select>
            <!-- Filtro 1 -->
            <div class="row f input-daterange mt-3">

              <div class="col-md-4">
                <input type="date" name="peso[start]" id="from_date1" class="form-control" placeholder="Desde" @if($pesoStart) value="{{$pesoStart}}" @endif />
              </div>
              <div class="col-md-4">
                <input type="date" name="peso[end]" id="to_date1" class="form-control" placeholder="Hasta" @if($pesoEnd) value="{{$pesoEnd}}" @endif />
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
              </div>
            </div>          
        </div>
        <div class="card-body">
          <div id="chart_ruega"></div>
        </div>
      </div>
    </div>
    <!-- INGRESAR TABLA  2-->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          <label for="select-week">TABLA DE DATOS ENFERMEDAD</label>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="edit-btn">
            <thead>
              <th>Numero de Casos</th>
              <th>Nombre</th>
              <th>Estado</th>
              <th>Fecha </th>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
    
    <!-- GRAFICO 3 -->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          <label for="select-week">Agrupar resultados por</label>
          <select name="peso[groupBy]" id="select-week" class="form-control">
            <option @if ($lecheGroupBy ==='Month' ) selected @endif value="Month">Mes</option>
            <option @if ($lecheGroupBy === 'WW' ) selected @endif value="WW">Semana</option>
            <option @if ($lecheGroupBy ==='YYYY' ) selected @endif value="YYYY">Año</option>
          </select>
          <!-- Filtro 2 -->
          <div class="row f input-daterange mt-3">

            <div class="col-md-4">
              <input type="date" name="leche[start]" id="from_date" class="form-control" placeholder="Desde" @if($lecheStart) value="{{$lecheStart}}" @endif/>
            </div>
            <div class="col-md-4">
              <input type="date" name="leche[end]" id="to_date" class="form-control" placeholder="Hasta" @if($lecheEnd) value="{{$lecheEnd}}" @endif/>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
            </div>
          </div> 
        </div>
        <div class="card-body">
          <div id="grafico-leche"></div>
        </div>
      </div>
    </div>

    <!-- TABLA 3 -->
    <div class="col-lg-6">
      <div class="card m-b-30">
        <div class="card-header">
          <label for="select-week">TABLA DE DATOS LECHE</label>

        </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="edit-btn2">

            <thead>
              <th>Código Animal</th>
              <th>Litros de Leche</th>
              <th>Cantidad</th>
              <th>Fecha Registro</th>
            </thead>
            <tbody></tbody>
          </table>

        </div>
        <div class="card-body">
          <div id="grafico-leche"></div>
        </div>
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
          series: [{
            name: "No Tratadas",
            data: [3, 4, 5, 6, 7, 8, 9, 3, 6, 1, 2, 3]
          },
          {
            name: "Tratadas",
            data: [1, 2, 3, 4, 5, 6, 2, 1, 2, 1, 0, 1]
          }
        ],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [5, 7, 5],
          curve: 'straight',
          dashArray: [0, 8, 5]
        },
        title: {
          text: 'Enfermedades',
          align: 'left'
        },
        legend: {
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['20 Jul', '21 Jul', '22 Jul', '23 Jul', '24 Jul', '25 Jul', '26 Jul', '27 Jul', '28 Jul', '29 Jul',
            '30 Jul', '31 Jul'
          ],
        },
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val + "-"
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val + " -"
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val;
                }
              }
            }
          ]
        },
        grid: {
          borderColor: '#f1f1f1',
        }
        };

  
          var chart = new ApexCharts(document.querySelector("#chart_ruega"), options);
          chart.render();
  
  </script>


<script>
  const promedioPesos = @json($promedioPesos);
  console.log(promedioPesos);
  var options = {
    series: [{
      name: 'Peso Anterior',
      data: promedioPesos?.map(promedio => promedio?.current)
    }, {
      name: 'Peso Actual',
      data: promedioPesos?.map(promedio => promedio?.old)
    }],
    chart: {
      type: 'bar',
      height: 400
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    title: {
      text: 'Peso de Ganancia',
      align: 'left'
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: promedioPesos?.map(promedio => promedio?.mes),
    },
  };


  var chart = new ApexCharts(document.querySelector("#grafico-peso"), options);
  chart.render();
</script>


<script>
   const promedioleche = @json($promedioleche);
  console.log(promedioleche);
  var options = {
    series: [{
      name: "Promedio Litros de Leche",
      data: promedioleche?.map(promedio => promedio?.current)
    }],
    chart: {
      height: 350,
      type: 'line',
      zoom: {
        enabled: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    title: {
      text: 'Litros de Leche Promedio',
      align: 'left'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
      },
    },
    xaxis: {
      categories: promedioleche?.map(promedio => promedio?.mes),
        }
  };

  var chart = new ApexCharts(document.querySelector("#grafico-leche"), options);
  chart.render();
</script>
<script>
  $(document).ready(function () {
      var from_date = $('#from_date1').val();
          var to_date = $('#to_date1').val();
          console.log("fehcha"+from_date);
          $('#edit-btn').DataTable( {
            
              language: {url: '{{asset('assets/es-Es.json')}}'},
              destroy: true,
              serverSide: true,
              responsive:true,
              pageLength: 7,
              lengthChange: false,
              autoWidth:false,
              searching: false,
              ajax: {url:'{{ route('peso.data') }}',data:{from_date:from_date, to_date:to_date} },
              columns: [
                  {data: 'animal_id'},
                  {data: 'registro_peso_valor'},
                  {data: 'peso_anterior'},
                  {data: 'registro_peso_fecha'} 
              ]
          });
      
  });
</script>
<script>
  $(document).ready(function () {
      var from_date = $('#from_date').val();
          var to_date = $('#to_date').val();
          console.log("fehcha"+from_date);
          $('#edit-btn2').DataTable( {
            
              language: {url: '{{asset('assets/es-Es.json')}}'},
              destroy: true,
              serverSide: true,
              responsive:true,
              pageLength: 7,
              lengthChange: false,
              autoWidth:false,
              searching: false,
              ajax: {url:'{{ route('ordeno.data') }}',data:{from_date:from_date, to_date:to_date} },
              columns: [
                  {data: 'animal_id'},
                  {data: 'registro_ordeño_litros'},
                  {data: 'registro_ordeño_cantidad'},
                  {data: 'registro_ordeño_fecha'} 
              ]
          });
      
  });
</script>



<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
<!-- Custom CRM Project js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-chart-apex.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-crm-projects.js') }}"></script>

@endsection