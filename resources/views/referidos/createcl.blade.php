
@extends('layouts.app')


@section('content')

<div class="container">

  <div class="col-md-12">
    <div class="card-header bg-danger "> <img src="http://192.168.1.107/referidos/public/img/claro.png" alt="" width="300" height="100"></div>
        <div class="card">    
          {!! Form::open(['route' => 'referidos.storecl' , 'id' => 'formAgregarEvento' , 'name' => 'formAgregarEvento']) !!}
   
          <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('CEDULA' , 'Cedula'); !!}
                      {!! Form::text('CEDULA' , null, ['class' =>'form-control',  'placeholder' => '0999999999' , 'required' ]); !!}
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
                      {!! Form::label('EMAIL' , '   Email'); !!}
                      {!! Form::email(' EMAIL' , null, ['class' =>'form-control',  'placeholder' => 'ejemplo@ejemplo.com' , 'required' ]); !!}
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                      {!! Form::label('PROVINCIA' , 'Provincia'); !!}
                      {!! Form::text(' PROVINCIA' , null, ['class' =>'form-control',  'placeholder' => 'Provincia' , 'required' ]); !!}
                  </div>
              </div>
            </div>
              <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('PLAN' , '   Tipo de Plan'); !!}
                      {!! Form::text(' PLAN' , null, ['class' =>'form-control',  'placeholder' => '  Tipo de Plan' , 'required' ]); !!}
                    </div>   
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                    {!! Form::label('TELEFONO' , '   Teléfono'); !!}
                    {!! Form::number(' TELEFONO' , null, ['class' =>'form-control',  'placeholder' => '0999999999' , 'required' ]); !!}
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


 

