@extends('layouts.app')


@section('content')
<br><br><br><br><br>
<div class="container">
<!--<center> <a href="{{ route('log') }}" class="btn btn-primary"> Buscar Telefonos</a></center>-->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-3 mb-2 bg-success text-white">Seleccione el Tipo de Campaña</div>

                <div class="card-body">
               
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title p-3 mb-2 bg-warning text-secondary">Deprati</h5>
                                    <img src="http://192.168.1.107/referidos/public/img/deprati.png" alt="" width="300" height="100"></br>
                                    <center> <a href="{{ route('referidos.createdp') }}" class="btn btn-warning"> Agregar</a></center>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title p-3 mb-2 bg-primary text-white">Pacificard</h5>
                                        <img src="http://192.168.1.107/referidos/public/img/pacificard.png" alt="" width="300" height="100"></br>
                                   <center> <a href="{{ route('referidos.create') }}" class="btn btn-primary">Agregar</a></center>
                                </div>
                            </div>
                        </div>
                    

                    

                  
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title p-3 mb-2 bg-danger text-white">Claro</h5>
                                    <img src="http://192.168.1.107/referidos/public/img/claro.png" alt="" width="300" height="100"></br>
                                    <center> <a href="{{ route('referidos.createcl') }}" class="btn btn-danger"> Agregar</a></center>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</div>


@endsection