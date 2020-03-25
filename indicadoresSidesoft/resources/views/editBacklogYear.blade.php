<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indicadores Funcionales Sidesoft</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<link  href="https://cHdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
{{-- <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link  href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.min.css" rel="stylesheet">   --}}
<link  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
    
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>         --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>              

<!-- Bootstrap 3.3.6 -->
<!--<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">-->
{{-- <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"> --}}
<!-- Font Awesome -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- jvectormap -->
<!--<link rel="stylesheet" href="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->
<link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<!-- Theme style -->
<!--<link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">-->
<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
<!--<link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">-->
<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">        
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>
<body>

{{-- Navbar --}}
        @include('layouts.menu')      

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li>
                      <a href="/users"> Gestion de Usuarios</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }} de : {{ Auth::user()->name }} 

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card">
  <h5 class="card-header">Editar Backlog</h5>
  <div class="card-body">
    <h5 class="card-title">Solo se puede editar la calificación y descripción</h5>
    <form  action="{{ route('backlog.editConfirmar', $backlogToEdit->ss_backlog_year_id)}}" method="POST">
       {{ csrf_field() }}
       <label for="exampleFormControlInput1" hidden>Añassassao</label>
    <input name = "year" type="number"  class="form-control" value='2020' hidden >
    <input name = "ss_area_id" type="number"  class="form-control" value='2' hidden >
    <label for="exampleFormControlInput1" hidden>Número de Backlog a editar</label>
    <input name = "ss_backlog_year_id" type="number"  class="form-control" value='{{$backlogToEdit->ss_backlog_year_id}}'  hidden>
    <label for="exampleFormControlInput1" hidden>Backlog of 52</label>
    <input name = "ss_backlog_id" type="number"  class="form-control" value='{{$backlogToEdit->ss_backlog_id}}'  hidden>

  <div class="form-group">  
    <label for="exampleInputEmail1">Nombre</label>
    <input  type="text" class="form-control" value="{{$backlogToEdit->name}}" disabled>
    <input name='user_id' type="text" class="form-control" value="{{$backlogToEdit->ss_user_id}}" hidden>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Área</label>
    <input  type="text" class="form-control" value="Área de Soporte" disabled>
    <input name='area_id' type="text" class="form-control" value="{{$backlogToEdit->ss_area_id}}" hidden>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Backlog</label>
    <input name='description' type="text" class="form-control" value="{{$backlogToEdit->backlog}}" disabled>
  </div>
    <label for="exampleFormControlInput1" hidden>Año</label>
    <input name = "year" type="number"  class="form-control" value='2020' hidden >
    <input name = "ss_area_id" type="number"  class="form-control" value='2' hidden >

  <div class="form-group">
    <label for="exampleInputEmail1">Calificación</label>
    <input name='qualification' type="number" max="100" class="form-control"  value="{{$backlogToEdit->qualification}}" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input name='description' type="text" class="form-control" value="{{$backlogToEdit->description}}" required>
  </div>

  
  <div class="form-group">
    <label for="exampleInputEmail1" hidden>IsActive</label>
    <input name="isactive" value='1' type="text" class="form-control" hidden >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
        

</body>


</html>