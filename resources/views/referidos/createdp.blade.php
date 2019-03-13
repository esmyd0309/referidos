
@extends('layouts.app')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <center><p>{{ $error }}</p></center>
    @endforeach
@endif
</div>
<div class="container">

  <div class="col-md-12">
    <div class="card-header bg-light  "> <img src="http://192.168.1.107/referidos/public/img/deprati.png" alt="" width="300" height="100"></div>
 
        <div class="card">    
        <a  href="{{ route('deprati') }}" class="btn btn-success btn-lg active" role="button"> Buscar Datos  </a> 
          {!! Form::open(['route' => 'referidos.storedp' , 'id' => 'formAgregarEvento' , 'name' => 'formAgregarEvento']) !!}
   
          <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('CEDULA' , 'Cedula'); !!}
                      {!! Form::text('CEDULA' , null, ['class' =>'form-control',  'placeholder' => '0999999999' , 'required' ]); !!}
                      @if ($errors->has('CEDULA'))
                            <span class="invalid-freedback" role="alert">
                                <strong>{{ $errors->first('CEDULA') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('NOMBRE' , '   Nombres'); !!}
                      {!! Form::text(' NOMBRE' , null, ['class' =>'form-control',  'placeholder' => 'Nombres' , 'required' ]); !!}
                    </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                      {!! Form::label('CALIFICACION' , '   Calificación'); !!}
                      {!! Form::text(' CALIFICACION' , null, ['class' =>'form-control',  'placeholder' => 'A / AA / AAA' , 'required' ]); !!}
                        @if ($errors->has('CALIFICACION'))
                            <span class="invalid-freedback" role="alert">
                                <strong>{{ $errors->first('CALIFICACION') }}</strong>
                            </span>
                        @endif
                  </div>
                  </div>  
             </div>

              
              <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('PROVINCIA' , 'Provincia'); !!}
                      {!! Form::text(' PROVINCIA' , null, ['class' =>'form-control',  'placeholder' => 'Provincia' , 'required' ]); !!}
                    </div>
                </div>
            

                <div class="col-sm-3">
                    <div class="form-group">
                    {!! Form::label('TELEFONO' , '   Teléfono'); !!}
                    {!! Form::number(' TELEFONO' , null, ['class' =>'form-control',  'placeholder' => '0999999999' , 'required' ]); !!}
                         @if ($errors->has('TELEFONO'))
                            <span class="invalid-freedback" role="alert">
                                <strong>{{ $errors->first('TELEFONO') }}</strong>
                            </span>
                        @endif
                    
                    </div>
                </div>
                
              </div>
            </div>
            <center><button id="registrarBtn" class="btn btn-primary" type="submit"> Registrar </button></center>
           <a  href="{{ route('referidos.index') }}" class="btn btn-success btn-lg active" role="button"> Volver </a>
          </div>
      
         
          

        </div>
        
    </div>
    
  </div>

</div>
    {!! Form::close() !!}

    

@endsection
