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

        {{-- Navbar ADMIN--}}
        @include('layouts.menuAdmin')      

<div class="container-fluid">
<div class="card text-center">
  <div class="card-header">
  Administrador Backlogs
  </div>
  <div class="card-body">
    <h5 class="card-title">Gestión de Backlogs Sidesoft</h5>
    <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQEuDlqvVd-aNQ/company-logo_200_200/0?e=2159024400&v=beta&t=Uig7WoSozGXkLq6EMdEBsLDEqhVTmlYC2d2_TuIgd80" alt="">
  </div>
  <div class="card-footer text-muted">
   
<div class="card-group">
  <div class="card text-center">
    <div class="card-body">
    <i class="fa fa-line-chart" aria-hidden="true"></i>

      <h5 class="card-title">Indicadores Desarrollo</h5>
<!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDesarrollo">
        Gestion Backlogs Desarrollo
      </button> 
    </div>

  </div>
  <div class="card text-center">
    <div class="card-body">
    <i class="fa fa-line-chart" aria-hidden="true"></i>
    <h5 class="card-title">Indicadores Funcionales</h5>
<!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFuncionales">
        Gestion Backlogs Funcionales
      </button>    
     </div>
 
  </div>
  <div class="card text-center">
    <div class="card-body">
    <i class="fa fa-line-chart" aria-hidden="true"></i>
    <h5 class="card-title">Indicadores Soporte</h5>
<!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSoporte">
        Gestion Backlogs Soporte
      </button>    
       </div>

  </div>
</div>
  </div>
</div>
<!-- REGISTRO  CORRECTO -->
<div class='card-body'>
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
    Correcto: {{session('info')}} 
    </div>   
    @endif
</div>
<!-- REGISTRO  INCORRECTO -->
 
<div class='card-body'>
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
    Error: {{session('error')}} 
    </div>   
    @endif
</div>


<table  id="table_id" class="display">
    <thead  class="bg-green">
        <tr >
            <th>Backlog #</th> 
            <th>Año</th>
            <th>Usuario</th>
            <th>Calificación</th>
            <th>Calif. Políticas</th>
            <th>Area</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>

        @for ($i = 0; $i < count($backlogs); $i++)
        <tr>
        <td>{{$backlogs[$i]->backlog}}</td>
        <td>{{$backlogs[$i]->year}}</td>
        <td>{{$backlogs[$i]->name}}</td>
        <td>{{$backlogs[$i]->qualification}}</td>
        <td>{{$backlogs[$i]->points_politics}}</td>
        <td>{{$backlogs[$i]->area}}</td>
        <td>{{$backlogs[$i]->description}}</td> 
        <td>
        <a href="/backlog_year/{{$backlogs[$i]->ss_backlog_year_id}}/edit/{{$backlogs[$i]->ss_user_id}}" type="button" class="btn btn-primary" >
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
      </a> 
      @if($backlogs[$i]->points_politics == 0 )
       @if($backlogs[$i]->ss_area_id == 2) 
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"  data-backlog="{{$backlogs[$i]->backlog}}" data-id="{{$backlogs[$i]->ss_backlog_id}}" data-user="{{$backlogs[$i]->name}}" data-uid="{{$backlogs[$i]->ss_user_id}}" data-area="{{$backlogs[$i]->area}}" data-aid="{{$backlogs[$i]->ss_area_id}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></button>
    
      @endif
      
      @if($backlogs[$i]->ss_area_id == 1) 
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"  data-backlog="{{$backlogs[$i]->backlog}}" data-id="{{$backlogs[$i]->ss_backlog_id}}" data-user="{{$backlogs[$i]->name}}" data-uid="{{$backlogs[$i]->ss_user_id}}" data-area="{{$backlogs[$i]->area}}" data-aid="{{$backlogs[$i]->ss_area_id}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></button>
      @endif
      @if($backlogs[$i]->ss_area_id == 3) 
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo"  data-backlog="{{$backlogs[$i]->backlog}}" data-id="{{$backlogs[$i]->ss_backlog_id}}" data-user="{{$backlogs[$i]->name}}" data-uid="{{$backlogs[$i]->ss_user_id}}" data-area="{{$backlogs[$i]->area}}" data-aid="{{$backlogs[$i]->ss_area_id}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></button>
     
      @endif
      @else
      <span style="font-size: 30px; color: green; padding-left:16px">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            </span>
            @endif
            </td>
              </tr>
      @endfor                                                 
          </tbody>
      </table>
    </div>   
  </div>
</div>
{{-- MODAL POLITICAS --}}
        @include('layouts.modalPoliticasTecnicas')        
        @include('layouts.modalPoliticasConsultants')        
        @include('layouts.modalPoliticasSupport')        
</div>



<!-- Modal DESARROLLO -->
<div class="modal fade" id="modalDesarrollo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form action="{{ route('backlog.search')}}" method="POST">
       {{ csrf_field() }}

  <div class="form-group">
    <!--PRIMERO SELECCIONE EL USUARIO A CALIFICAR -->
    <label for="exampleFormControlInput1" hidden>Año</label>
    <input name = "year" type="number"  class="form-control" value='2020' hidden >
    <input name = "ss_area_id" type="number"  class="form-control" value='2' hidden >

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Usuario a Calificar</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "nombreUsuario">
    @foreach ($usuariosPorAreaTecnica as $user)
    <option  > <a href="#"></a> {{$user->name}}</option>
    @endforeach                 
    </select> 
  </div>


  <button type="submit" class="btn btn-primary">Calificar</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<!-- MODAL INDICADORES CONSULTORIA-->

<!-- Modal -->
<div class="modal fade" id="modalFuncionales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form action="{{ route('backlog.search')}}" method="POST">
       {{ csrf_field() }}

  <div class="form-group">
    <!--PRIMERO SELECCIONE EL USUARIO A CALIFICAR -->
    <label for="exampleFormControlInput1" hidden>Año</label>
    <input name = "year" type="number"  class="form-control" value='2020' hidden >
    <input name = "ss_area_id" type="number"  class="form-control" value='1' hidden >

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Usuario a Calificar</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "nombreUsuario">
    @foreach ($usuariosPorAreaConsultoria as $user)
    <option  > <a href="#"></a> {{$user->name}}</option>
    @endforeach                 
    </select> 
  </div>

  <button type="submit" class="btn btn-primary">Calificar</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- MODAL INDICADORES SOPORTE-->

<!-- Modal -->
<div class="modal fade" id="modalSoporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
  <form action="{{ route('backlog.search')}}" method="POST">
       {{ csrf_field() }}

  <div class="form-group">
    <!--PRIMERO SELECCIONE EL USUARIO A CALIFICAR -->
    <label for="exampleFormControlInput1" hidden>Año</label>
    <input name = "year" type="number"  class="form-control" value='2020' hidden >
    <input name = "ss_area_id" type="number"  class="form-control" value='3' hidden >

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Usuario a Calificar</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "nombreUsuario">
    @foreach ($usuariosPorAreaSoporte as $user)
    <option  > <a href="#"></a> {{$user->name}}</option>
    @endforeach                 
    </select> 
  </div>

  <button type="submit" class="btn btn-primary">Calificar</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

    
</body>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
     </script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</html>