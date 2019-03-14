
@extends('layouts.app')


@section('content')
<hr>
<hr>
<hr>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-info   ">
                <div class="card-header">Actualizar Extensiones</div>
               
                    <form method="POST" action="{{ route('grupo.proc') }}">
                        @csrf
                                <div class="form-group">
                                
                                    <select name="user_group" class="browser-default custom-select" class="form-control{{ $errors->has('user_group') ? ' is-invalid' : ''  }}" autofocus  >
                                        <option value="">-- Todos los Grupo --</option>
                                        @foreach ($grupos as $gruposs)
                                            <option value="{{ $gruposs->user_group }}"><b>{{ $gruposs->user_group }}</b>  __  {{ $gruposs->group_name }}</option>
                                        @endforeach
                                        @if ($errors->has('user_group'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('user_group') }}</strong>
                                            </span>
                                        @endif
                                    </select>
                                </div>
                                <center> <button type="submit" class="btn btn-danger  btn-sm">{{ __('Buscar') }}</button> |||
                            <a href="{{ route('home') }}" class="btn btn-success btn-sm">Volver</a>
                        </center>
                    </div>
            </div>

        </div>
    </div>
</div>                    
                       
                      
                {!! Form::close() !!}   
               
          
       
   
@endsection