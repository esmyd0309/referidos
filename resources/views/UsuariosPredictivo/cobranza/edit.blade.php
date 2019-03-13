@extends('layouts.app')

@section('content')
<div class="container">

      
    {!! Form::model($userPredictivos, ['route' => ['usuarios.update', $userPredictivos->user_id],
        'method' => 'PATCH']) !!}

        

            @include('UsuariosPredictivo.ventas.partials.formpreg')


    {!! Form::close() !!}

  
</div>
@endsection