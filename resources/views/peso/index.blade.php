@section('title')
SGB - Peso
@endsection
@extends('layouts.main')
@section('style')
<!-- Range Slider css -->
<link href="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">

    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start col -->
<div class="col-lg-12">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">Peso</h5>
        </div>
        <div class="card-body">
            <div class="row input-daterange">
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                    <label>Filtrar por fecha de medición</label>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Desde"
                        readonly />
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="Hasta" readonly />
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                    <button type="button" name="filter" id="filter" class="button2 btn btn-primary">Filtrar</button>

                </div>
                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-4">
                    <button type="button" name="refresh" id="refresh" class="button2 btn btn-primary">Limpiar</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="edit-btn">
                    <tfoot>
                        <th>Código</th>
                        <th>Código Animal </th>
                        <th>Fecha de Medición</th>
                        <th>Peso en KG</th>
                        <th class="inv">Opciones</th>
                    </tfoot>

                    <thead>
                        <tr>
                            <th data-priority="1">Código</th>
                            <th data-priority="2">Código Animal </th>
                            <th data-priority="3">Fecha de Medición</th>
                            <th data-priority="4">Peso en KG</th>
                            <th data-priority="1"> Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- Fin col -->
<!-- FIN Contentbar -->
@endsection
@section('script')
<!-- Range Slider js -->
<script src="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
<!-- eCommerce Shop Page js -->
<script>
    $(document).ready(function () {
        $('#edit-btn tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="buscar" />');
        });
        $('.input-daterange').datepicker({
            language: 'es',
            changeYear: true,
            todayBtn:'linked',
            format:'yyyy-mm-dd',
            autoclose:true
        });

        load_data();
        function newexportaction(e, dt, button, config) {
    var self = this;
    var oldStart = dt.settings()[0]._iDisplayStart;
    dt.one('preXhr', function (e, s, data) {
        // Just this once, load all data from the server...
        data.start = 0;
        data.length = 2147483647;
        dt.one('preDraw', function (e, settings) {
            // Call the original action function
            if (button[0].className.indexOf('buttons-copy') >= 0) {
                $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                    $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
            } else if (button[0].className.indexOf('buttons-print') >= 0) {
                $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
            }
            dt.one('preXhr', function (e, s, data) {
                // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                // Set the property to what it was before exporting.
                settings._iDisplayStart = oldStart;
                data.start = oldStart;
            });
            // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
            setTimeout(dt.ajax.reload, 0);
            // Prevent rendering of the full data to the DOM
            return false;
        });
    });
    // Requery the server with the new one-time export settings
    dt.ajax.reload();
};
        function load_data(from_date = '', to_date = ''){
            $('#edit-btn').DataTable( {
                initComplete: function () {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function () {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function () {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },

                language: {url: '{{asset('assets/es-Es.json')}}'},
                serverside:true,
                responsive:true,
                pageLength: 5,
                autoWidth:false,
                destroy: true,
                order: [[0, 'desc']],
                dom: "<'row'<'col-sm-6'l><'col-sm-6 right-col'B>><'row'<'col-sm-12'tr>><'row'<'col-sm-6'><'col-sm-6'p>><'row'<'col-sm-12 text-right'i>>",
                ajax: {url:'{{ route('peso.index') }}',data:{from_date:from_date, to_date:to_date} },
                columns: [
                    {data: 'registro_peso_id'},
                    {data: 'animal_id'},
                    {data: 'registro_peso_fecha'},
                    {data: 'registro_peso_valor'},
                    {data: 'pdf'}
                ],
                buttons: [
                    {
                        extend: 'colvis',
                        columns: [':not(.noVis)'],
                    },
                    {
                        extend: 'excelHtml5',
                        text:  ' excel  <i class="mdi mdi-file-excel"></i> ',
                        className: 'btn btn-success',
                        action: newexportaction,
                        exportOptions: {
                            columns: function(idx, data, node) {
                                if ($(node).hasClass('noVis')) {
                                    return false;
                                }
                                return $('#edit-btn').DataTable().column(idx).visible();
                            }
                        }
                    },
                    {
                        text: ' nuevo registro  <i class="fa fa-plus"></i> ',
                        className: 'btn btn-info',
                        action: function (e,dt, node, config) {
                            window.location= 'peso/create';
                        }
                    }

                ]

            });
        }
        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            if(from_date != '' &&  to_date != ''){
                $('#edit_btn').DataTable().destroy();
                load_data(from_date, to_date);
            }
            else{
                alert('Both Date is required');
            }
        });

        $('#refresh').click(function(){
            $('#from_date').val('');
            $('#to_date').val('');
            $('#edit_btn').DataTable().destroy();
            load_data();
        });

    });
</script>
<script>
    function eliminar(event,data) {
        console.log(data);    event.preventDefault();
        Swal.fire({
  title: 'Seguro desea eliminar el registro de peso '+data,
  text: "Esta acción es irreversible",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, bórralo',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    let url='{{ route("peso.delete",":id") }}'
    url=url.replace(':id',data)
    window.location.href=url;
    /*Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ) */
  }
})
}

</script>
@if (session('eliminacion')=='ok')
<script>
    Swal.fire(
      'Eliminación',
      'El registro de peso ha sido eliminado.',
      'success'
    )
</script>
@endif
@if (session('creacion')=='ok')
<script>
    Swal.fire(
      'Creación',
      'El registro de peso ha sido creado correctamente.',
      'success'
    )
</script>
@endif
@if (session('actualizacion')=='ok')
<script>
    Swal.fire(
      'Actualización',
      'El registro de peso ha sido actualizado correctamente.',
      'success'
    )
</script>
@endif
@endsection
