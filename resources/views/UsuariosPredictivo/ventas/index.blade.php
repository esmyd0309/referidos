@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
  <div class="d-inline-block align-top" class="col-md-6" > 
             
                  <!--    {!! Form::open(['route'=> 'grupo', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
             
             {{ Form::text('agente', null, ['class' => 'form-control', 'placeholder' => 'agente']) }}
         
             {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'phone']) }}
          
           
             
                 <button type='submit' class='btn btn-default'>
                 <span class="glyphicon glyphicon-search">BUSCAR</span>
                 </button>
   

{!! Form::close() !!}-->

</div>
                <div class="card-header">
                    Usuarios

           
                <div class="card-body">
                   <table class="table table-scriped table-hover">
                       <thead>
                           <tr>
                               <th WIDTH="10px">
                                   ID
                               </th>
                               <th>Agente</th>
                               <th>Extension</th>
                               <th>Grupo</th>
                               <th colspan="3">&nbsp;</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($usuarios as $usuarioss)
                                <tr>
                                    <td>{{ $usuarioss->user_id }}</td>
                                    <td>{{ $usuarioss->user }}</td>
                                    <td>{{ $usuarioss->phone_login }}</td>
                                    <td>{{ $usuarioss->user_group }}</td>
                                  
                                    
                                    <td WIDTH="5px">
                                 

                                        <a href="{{ route('usuarios.edit', $usuarioss->user_id) }}" 
                                            class="btn btn-sm btn-info">EDITAR</a>
                                       
                                    </td>

                        
                                    
                                    <td WIDTH="5px">
                                  
                                    </td>

                                </tr>
                           @endforeach
                       </tbody>

                   </table>
           
                </div>
                
                <a href="{{ route('grupos.index') }}" class="btn btn-success btn-sm">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection