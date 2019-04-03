<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DAMPLUS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    footer {
   
   width: 100%;
   bottom: 0;
   position:fixed;


}
    body {
        background-image: url("http://192.168.1.107/referidos/public/img/fondo.jpg");
        -webkit-background-size: cover;
  
     
    }
    
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel " style="background-color: #ADF5E7;">
            <div class="container">
            <a class="navbar-brand" href="{{ url('home') }}" style="background-color: #d7f3e3;">
                   <img src="http://192.168.1.107/referidos/public/img/logo.jpg" alt="DatamarketingPlus">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            
                            <a class="nav-link" href="{{ url('http://192.168.1.107/ventas/public/welcome') }}"><img src="http://192.168.1.107/ventas/public/img/home.png" width="40" height="35" class="rounded-pill"></a>
                            </li> 
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><img src="http://192.168.1.107/ventas/public/img/on.png" width="40" height="35" class="rounded-pill"></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                  <!--     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
                                </li>
                            @endif
                        @else
                        <a class="navbar-brand" href="{{ url('http://192.168.1.107/ventas/public/welcome') }}" >
                        <img src="http://192.168.1.107/ventas/public/img/home.png" width="40" height="35" class="rounded-pill">
                </a>
               
               
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@if(session('info'))
<div class="container">
    
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="alert alert-success">
                <center>{{ session('info') }}</center>
            </div>
        </div>
    </div>
</div>
@endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="page-footer font-small blue" style="background-color: #ADF5E7;">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Copyright: GregorioOsorio
  <a href="#"> gregorioenrique14@gmail.com</a>
</div>
<!-- Copyright -->

</footer>


        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <script>
      
      $(document).ready(function()
       {
            $('#users').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('api/users') }}",
                "type": 'POST',
                "columns": [
                    {data:  "id"},
                    {data:  "name"},
                  
                    {data: 'btn'},
                ],

                  "language": {
                  "search":"Buscar",
                  "lengthMenu": "Mostar _MENU_ registros por página",
                  "zeroRecords": "Lo sentimos, no encontramos lo que estas buscando",
                  "info": "Mostrando página _PAGE_ de _PAGES_",
                  "infoEmpty": "Registros no encontrados",
                  "infoFiltered": "(Filtrado en _MAX_ registros totales)"
              },
            });
        });
      </script>
</body>
</html>
