@extends('layouts.app')


@section('content')

<div class="container">
<div class="page-header">
    <div class="row">
   

             
        <div class="col-md-12">
            <div class="card">
                <div class="alert alert-success" class="card-header"  >Datos del Cliente</div>
              
                
                @foreach ($registro as $registros)
                <div class="row">
                    <div class="col-md-4"> <b> Cedula:</b>   {{ $registros->id }} </div>
                    <div class="col-md-4"> <b> Nombres: </b> {{ $registros->name }}</div>
                    <div class="col-md-4"> <b> Conyugue </b> {{ $registros->password }} </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> <b> Padre :</b>   {{ $registros->email }} </div>
                    <div class="col-md-4"> <b> Madre : </b> {{ $registros->name }}</div>
                </div>
                @endforeach
              
          </div>
          </div>      
               




<div class="col-md-2">
      
        </div>
    </div>
</div>
<hr>
                     
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="alert alert-success" class="card-header"  >Coincidencias</div>
             <table >
                <thead class="thead-dark">
                    <th  class='text-center'>Cedula</th>
                    <th class='text-center'>Nombres</th>
                    <th class='text-center'>email</th>
            <center><th  class='text-center'>Accion</th></center>
                </thead>
                <tbody>
                            <tr >
                                @foreach ($gestion as $gestions)
                                <td class='text-center'><small class="text-muted">{{ $gestions->id }}</small></td> 
                                <td class='text-center'><small class="text-muted">{{ $gestions->name }}</small></td> 
                                <td class='text-center'><small class="text-muted">{{ $gestions->email }}</small></td> 
                                <input name="maxima_calificacion" type="hidden" value="{{ $id }}">

                                <td class='text-center'>
                                <a href="{{ route('gestion.procesar', [$gestions->id, $id]) }}" class="btn btn-success btn-xs">Ejecutar</a>

                            </tr>
                
                 

                   
                    @endforeach
                
                </tbody> 
    
            </table>

              {!! $gestion->render() !!}
               

        </div>
            </div>
            <center> <a href=" {{ route('actualizars.index') }}" class="btn btn-primary">Volver</a></center>
        </div>
    </div>
</div>
 

@endsection

