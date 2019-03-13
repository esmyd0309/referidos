@extends('layouts.app')


@section('content')

<div class="container">
    <div class="page-header">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="alert alert-success" class="card-header"  >Datos </div>
                
                    <div class="row ">
                        <div class="col-md-4"> 
                            <b> Cantidad del lote <i>{{ $de }}</i> :</b>
                            @foreach ($cantidad as $cantidads)
                                {{ $cantidads->CANTIDAD }} 
                            @endforeach
                        </div>    
                    
                        <div class="col-md-4"> 
                            <b> status:</b> 
                            @foreach ($status as $statuss)
                        
                                {{ $statuss->status }}
                            @endforeach
                        </div>

                    
                        <div class="col-md-4"> 
                            <b> Cantidad Encontrada En el lote <i> {{ $sacar }}</i> :</b> 
                            @foreach ($SACR as $sacars)
                            {{ $sacars->sacar }} </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                        {!! Form::open(['route' => 'vicidial.storecobranza']) !!}

                           
                            <input name="lotes" type="hidden" value="{{ $de }}">
                            <input name="lotes2" type="hidden" value="{{$sacar}}">
                            <input name="marca" type="hidden" value="{{ $marca }}">
                            {{ form::submit('PROCESAR', ['class' => 'btn btn-sm btn-primary','onclick'=> "return confirm('¿ ESTAS SEGURO QUE DESEAS PROCESAR ?')" ]) }}
                           
                        {!! Form::close() !!}
                      <hr>
                        <p><I>QUERRY A EJECUTAR :</I></p>
                        <p>UPDATE vicidial_list SET STATUS='lote' 
                            WHERE list_id='lote' 
                            AND first_name IN (SELECT first_name FROM tabla_temp) 
                            AND NOT STATUS IN ('CMP','CMPT','CALLBK')</p>
                           <center> <a  href="{{ route('cobranza') }}" class="btn btn-success btn-sm active" role="button"> Volver </a></center>
                    </div>
                    </div>

                </div>
            </div>      
        </div>
    </div>
</div>
@endsection