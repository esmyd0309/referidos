@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios

                  <!--  @can('usuarios.create') verificar si tiene permisos. 
                    <a href="{{ route('usuarios.create') }}" 
                        class="btn btn-sm btn-primary float-right ">
                        Crear 
                    </a>
                    @endcan
                </div>-->
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
                   {{ $usuarios->render() }}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection