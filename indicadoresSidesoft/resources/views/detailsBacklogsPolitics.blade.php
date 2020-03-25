<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Indicadores Tecnicos Sidesoft</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    </head>
    <body>
    
        {{-- Navbar --}}
        @include('layouts.menu')        
        <div class="container-fluid">
<div class="card text-center">
    <div class="card-header">
    Detalles de políticas
    </div>
    <div class="card-body">
        <h5 class="card-title">Gestión de Backlogs Sidesoft</h5>
        <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQEuDlqvVd-aNQ/company-logo_200_200/0?e=2159024400&v=beta&t=Uig7WoSozGXkLq6EMdEBsLDEqhVTmlYC2d2_TuIgd80" alt="">
    </div>
  <div class="card-footer text-muted">
  </div>
</div> 
<h4>Observaciones:</h4>
@if(count($politicsDetails) > 0)
<div class="alert alert-primary" role="alert">
<h6>{{$politicsDetails[0]->description}}</h6>
</div>
@endif
<table  id="table_id" class="display">
    <thead  class="bg-green">
        <tr >
            <th>Backlog #</th> 
            <th>Usuario</th>
            <th>Tipo Politica</th>
            <th>Política</th>
            <th>Puntos</th>
        </tr>
    </thead>
    <tbody>

    @for ($i = 0; $i < count($politicsDetails); $i++)
       <tr>
            <td>Backlog {{$politicsDetails[$i]->ss_backlog_id}}  </td>
            <td>{{$politicsDetails[$i]->name}}</td>
            <td>{{$politicsDetails[$i]->type}}</td>
            <td>{{$politicsDetails[$i]->descripcion}}</td>
            <td>
            @if($politicsDetails[$i]->type == "suma")
             + {{$politicsDetails[$i]->points}}</td>
            @endif
            @if($politicsDetails[$i]->type == "resta")
             - {{$politicsDetails[$i]->points}}</td>
            @endif
       </tr>
    @endfor                                                 
          </tbody>
    </table>
    
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