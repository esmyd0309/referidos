
@extends('layouts.app')


@section('content')

<div class="container">

  <div class="col-md-12">
    <div class="card-header "> <img src="http://192.168.1.107/referidos/public/img/pacificard.png" alt="" width="300" height="100"></div>
        <div class="card">  
        <a  href="{{ route('pacificar') }}" class="btn btn-success btn-lg active" role="button"> Buscar Datos  </a>  
          {!! Form::open(['route' => 'referidos.store' , 'id' => 'formAgregarEvento' , 'name' => 'formAgregarEvento']) !!}
   
          <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('CEDULA' , 'CEDULA'); !!}
                      {!! Form::text('CEDULA' , null, ['class' =>'form-control',  'placeholder' => 'CEDULA' , 'required' ]); !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('NOMBRE' , '   NOMBRE'); !!}
                      {!! Form::text(' NOMBRE' , null, ['class' =>'form-control',  'placeholder' => 'NOMBRE' , 'required' ]); !!}
                    </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                      {!! Form::label('SOLCITUD' , '   SOLCITUD'); !!}
                      {!! Form::text(' SOLCITUD' , null, ['class' =>'form-control',  'placeholder' => 'SOLCITUD' , 'required' ]); !!}
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                      {!! Form::label('DATO4' , '   DATO4'); !!}
                      {!! Form::text(' DATO4' , null, ['class' =>'form-control',  'placeholder' => 'DATO4' , 'required' ]); !!}
                  </div>
              </div>
            </div>
              <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('MARCA' , '   MARCA'); !!}
                      {!! Form::text(' MARCA' , null, ['class' =>'form-control',  'placeholder' => 'MARCA' , 'required' ]); !!}
                    </div>   
                </div>


                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('TIPO' , '   TIPO'); !!}
                      {!! Form::text(' TIPO' , null, ['class' =>'form-control',  'placeholder' => 'TIPO' , 'required' ]); !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                      {!! Form::label('CUPO' , '   CUPO'); !!}
                      {!! Form::text(' CUPO' , null, ['class' =>'form-control',  'placeholder' => 'CUPO' , 'required' ]); !!}
                    </div>
                </div>

                  <div class="col-sm-3">
                      <div class="form-group">
                      {!! Form::label('TELEFONO' , '   TELEFONO'); !!}
                      {!! Form::number(' TELEFONO' , null, ['class' =>'form-control',  'placeholder' => 'TELEFONO' , 'required' ]); !!}
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


