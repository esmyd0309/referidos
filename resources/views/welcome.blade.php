@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aplicaciones Internas</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <a class="navbar-brand" href="{{ route('referidos.index') }}"> <img src="http://192.168.1.107/ventas/public/img/red.png" width="100" height="100" class="rounded-pill" title="REFERIDOS: Aplicacion para ingresar clientes de Ventas, los cuales no se muentran a la hora de la consulta del SII_CALLCENTER. El mismo tiene conexion con el 192.168.1.203 para ingresar los  referidos, y con el 192.168.1.7, para consultar datos de clientes de la BD (Predictivo) - TABLAS (bd_actualizacion, bd_actualizacionDP)"></a><p>Referidos</p>
                        </div>
                        <div class="col-sm">
                        <a class="navbar-brand" href="{{ route('grupos.index') }}">  <img src="http://192.168.1.107/ventas/public/img/puestos.png" width="100" height="100" class="rounded-pill" title="ASIGNACION DE PUESTO: Aplicacion para la asignacion de los puestos del Callcenter, el mismo tiene conexión con el predictivo 192.168.1.75 BD (ASTERISK) TABLA (PHONES - VICIDIAL_USERS)"></a><p>Asignacion de Puestos</p>
                        </div>
                        <div class="col-sm">
                        <a class="navbar-brand" href="{{ url('http://192.168.1.107/ventas/public/logpredictivo') }}"> <img src="http://192.168.1.107/ventas/public/img/log.png" width="100" height="100" class="rounded-pill" title="HISTORIAL DE LLAMADAS: Aplicacion para la busqueda de posible contactos, de gestiones realizadas del Predictivo. Tiene conexión con el 192.168.1.7 BD (Predictivo) TABLAS (BD_RESUMEN_MANUAL_ULTIMO)"></a><p>Historial LLamadas</p>
                        </div>
                        <div class="col-sm">
                        <a class="navbar-brand" href="{{ url('http://192.168.1.107/ventas/public/dependent') }}"> <img src="http://192.168.1.107/ventas/public/img/iess.png" width="100" height="100" class="rounded-pill" title="Datos IESS: Aplicacion que permite consultar datos de clientes y algunas referencias de contactos. Tiene conexión con el 192.168.1.7 BD (PREDICTIVO) TABLA (DAMPLUSdependents)"></a><p>Datos del Iess</p>
                        
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm">
                        <a class="navbar-brand" href="{{ url('http://192.168.1.76/agc/vicidial.php') }}"> <img src="http://192.168.1.107/ventas/public/img/predictivo.png" width="100" height="100" class="rounded-pill" title="PREDICTIVO: SISTEMA DE MARCACIÓN"></a><p>Predictivo</p>
                        </div>
                        <div class="col-sm">
                       
                        </div>
                        <div class="col-sm">
                        
                        </div>
                        <div class="col-sm">
    
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection