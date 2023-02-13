@section('title')
SGB - Permisos
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
            <h5 class="card-title">Listado de Permisos</h5>
        </div>

        <div class="table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="sort">{{ __('Permission') }}</th>
                        @foreach ($roles as $role)
                        <th class="sticky">{{ $role->name }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ __($permission->name) }}</td>
                        @foreach ($roles as $role)
                        <td>
                            @if ($role->hasPermissionTo($permission->name))
                            <div class='checkbox icheck'><label><input type='checkbox' name='namehere'
                                        class='permission' data-role-id='{{ $role->id }}'
                                        data-permission='{{ $permission->name }}' checked></label></div>
                            @else
                            <div class='checkbox icheck'><label><input type='checkbox' name='namehere'
                                        class='permission' data-role-id='{{ $role->id }}'
                                        data-permission='{{ $permission->name }}'></label></div>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--codigo aqui -->

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
    $('input[type="checkbox"].permission').click(function(event) {
        console.log('entro al bucle');
        var url = "";
        var roleId = $(this).data('role-id');
        var permission = $(this).data('permission');
        if ($(this).is(':checked')) {
            url = "{{ url('permisos/give-permission-to-role') }}";
        } else {
            url = "{{ url('permisos/revoke-permission-to-role') }}";
        }
        $.ajax({
                method: "POST",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                    roleId: roleId,
                    permission: permission
                }
            })
            .done(function(msg) {

            });

    });
</script>

@endsection