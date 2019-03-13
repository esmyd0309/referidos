@extends('layouts.app')

@section('content')

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Agentes</th>
            <th>LLamadas</th>
            <th></th>
        </tr>
    </thead>
   
    <tbody>
    @foreach($log_VENTAS as $log_VENTA)
        <tr>
            <td>{{ $log_VENTA->USER }}</td>
   
        
        <td>{{ $log_VENTA->Llamadas }}</td>
        </tr>
    
        @endforeach
    </tbody>
  
</table>


@endsection

        

    