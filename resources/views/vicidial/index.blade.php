@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                
                     Procesos de Predictivo
        
                </div>  
                <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('log_lis') }}" 
                                    class="btn  btn-danger " onclick="return confirm('¿ ESTAS SEGURO QUE QUIERE REALIZAR ESTE PROCESO  1.-> Tranfiere los datos del predictivo a las tablas del 192.168.1.7 predictivo. ?')">
                                    <img src="http://192.168.1.107/referidos/public/img/list.png" width="100" height="100" class="rounded-pill"><p>List y Log</p></a>
                                </a>
                        
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('ventas') }}" 
                                    class="btn  btn-warning " >
                                    <img src="http://192.168.1.107/referidos/public/img/list.png" width="100" height="100" class="rounded-pill">
                                    <p>Sacar Ventas</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('cobranza') }}" 
                                    class="btn  btn-primary " >
                                    <img src="http://192.168.1.107/referidos/public/img/list.png" width="100" height="100" class="rounded-pill">
                                    <p>Sacar Compromisos</p>
                                </a>
                            </div> 
                            <div class="col-md-3">
                                <a href="{{ route('cobranza.cerrados') }} "  
                                    class="btn  btn-primary " >
                                    <img src="http://192.168.1.107/referidos/public/img/list.png" width="100" height="100" class="rounded-pill">
                                    <p>Sacar Desde el SII</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a  href="{{ route('home') }}" class="btn btn-success btn-sm active" role="button"> VOLVER </a>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/jquery-3.4.0.min.js') }}" ></script>
<!-- Scripts 
<script src="{{ asset('js/script.js') }}" ></script>-->

@endsection