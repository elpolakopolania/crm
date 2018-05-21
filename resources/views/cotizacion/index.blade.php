<!-- Extender plantilla -->
@extends('plantilla.app')

<!-- Título de la página -->
@section('titulo','Cotización')

@section('cssLib')
<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
<!-- Wait Me Css -->
<link href="{{ asset('plugins/waitme/waitMe.css') }}" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('cssPag')
<!-- Estilo de el contenido -->
@endsection

@section('contenido')
<?php
    $ligas = [];
    $grupos = [];
?>
<!-- Contenido de la página -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <!-- Identificar cliente -->
    <div class="card">
        <div class="header">
            <h2>
                Identificar cliente
            </h2>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <b>Tipo Documento:</b>
                        <select id="select_tipoDoc" name="select_tipoDoc" class="form-control show-tick selectpiker">
                            @foreach ($ligas as $liga)
                                <option value="{{ $liga['id'] }}">{{ $liga['nombre'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <b>Documento:</b>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">assignment</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="input_doc" id="input_doc" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                            <i class="material-icons">search</i>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido de la cotización -->
    <div class="card">
        <div class="header">
            <h2>
                Contenido
            </h2>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <b>Ciudad:</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">location_city</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="input_ciudad" id="input_ciudad" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Fecha:</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" value='2018-05-29' name="input_fecha" id="input_fecha" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">Contenido:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Contenio de la cotización..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detallado de la cotización -->
    <div class="card">
        <div class="header">
            <h2>
                Artículos
            </h2>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <b>Ciudad:</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons"</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="input_ciudad" id="input_ciudad" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <b>Fecha:</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" value='2018-05-29' name="input_fecha" id="input_fecha" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">Contenido:</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Contenio de la cotización..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script type="text/javascript">
  var ruta_base = '{{ url('') }}';
  var ruta_tabla = '{{ url('equipos') }}';
  var ruta_url = '{{ url('equipo') }}';
  var ruta_select_grupo = '{{ url('grupos_liga') }}';
</script>
<!-- #END# Basic Validation -->
@endsection

@section('jsLib')
<!-- Autosize Plugin Js -->
<script src="{{ asset('plugins/autosize/autosize.js') }}"></script>
<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
<!-- Moment Plugin Js -->
<script src="{{ asset('plugins/momentjs/moment.js') }}"></script>
<script src="{{ asset('plugins/momentjs/locale/es.js') }}"></script>
<script type="text/javascript">
    moment.locale('es');
    console.log(moment().format('LLL'));
</script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<!-- Dropzone Plugin Js -->
<script src="{{ asset('plugins/file/file.js') }}"></script>
<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/responsive/dataTables.responsive.min.js') }}"></script>
<!-- Validar formulario -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>
<!-- Select -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
@endsection

<!-- Librerias JS -->
@section('jsPag')
  <!-- <script src="{{ asset('js/pages/validar/validar_equipos.js') }}"></script>-->
@endsection
