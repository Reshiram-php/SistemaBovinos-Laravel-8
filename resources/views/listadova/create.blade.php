@section('title')
SGB - Vacunas
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
        <div class="col-md-8 col-lg-8">
            <div class="breadcrumb-list">
                <ol class="breadcrumb">


                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start col -->
<div class="col-lg-12">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">Vacunas</h5>
        </div>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::open(array('url'=>'listadova','method'=>'POST','autocomplete'=>'off')) !!}
        {{ Form::token() }}
        <div class="row">
            

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre de la Vacuna</label>
                    <input type="text" name="vacuna_nombre" value="{{ old('vacuna_nombre') }}" class="form-control" data-toggle="tooltip" data-placement="top"
                        placeholder="nombre" title="Ingrese nombre de la vacuna">
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Tipo de dosis</label>
                    <select id="dosis" name="dosis" class="form-control" data-toggle="tooltip" data-placement="top">
                        <option value="" disabled="" selected="">Seleccione: </option>
                        <option value="unica" @if (old('dosis')=="unica" ) {{ 'selected ' }} @endif>Dosis Única
                        </option>
                        <option value="cada_cierto_tiempo" @if (old('dosis')=="cada_cierto_tiempo" ) {{ 'selected ' }} @endif> Dosis cada cierto Tiempo</option>
                    </select>
                </div>
            </div>

            <div id="Periodicidad" class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style="display: none">
                <div class="form-group">
                    <label>Periodicidad de la dosis en días</label>
                    <input type="number" name="periodicidad" value="{{ old('periodicidad') }}" class="form-control" placeholder="ingrese dias"
                        data-toggle="tooltip" data-placement="top" title="Periodicidad">
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Categorias a aplicar </label>
                    <select id="categoria" name="categoria" class="form-control" data-toggle="tooltip" data-placement="top">
                        <option value="" disabled="" selected="">Seleccione: </option>
                        <option value=1 @if (old('categoria')==1) {{ 'selected ' }} @endif>Todas
                        </option>
                        <option value=2 @if (old('categoria')==2) {{ 'selected ' }} @endif>Terneros
                        </option>
                        <option value=3 @if (old('categoria')==3) {{ 'selected ' }} @endif>Toretes y Vaconas
                        </option>
                        <option value=4 @if (old('categoria')==4) {{ 'selected ' }} @endif>Toros y Vacas
                        </option>
                        <option value=5 @if (old('categoria')==5) {{ 'selected ' }} @endif>Terneros, Toretes y Vaconas
                        </option>
                        <option value=6 @if (old('categoria')==6) {{ 'selected ' }} @endif>Terneros, Toros y Vacas
                        </option>
                        <option value=7 @if (old('categoria')==7) {{ 'selected ' }} @endif>Toretes, Vaconas ,Toros y Vacas
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            <p class="text-center">
                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                    &nbsp;&nbsp; Limpiar</button>
                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;
                    Guardar</button>
            </p>
        </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection