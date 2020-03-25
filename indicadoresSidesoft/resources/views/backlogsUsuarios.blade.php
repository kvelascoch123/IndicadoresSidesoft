<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indicadores Funcionales Sidesoft</title>

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
    SIDESOFT
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
  <div class="card text-center">
  <img src="https://previews.123rf.com/images/urfandadashov/urfandadashov1808/urfandadashov180824148/109059093-user-vector-icon-isolated-on-transparent-background-user-logo-concept.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">{{$user[0]->name}}</h2>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Promedio del usuario: <b>{{$promedio}}</b></li>
  </ul>

</div>

  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Backlogs del Usuario : {{$user[0]->name}}</h5>
        <div class='card-body'>
    @if(session('info'))
    <div class="alert alert-info" role="alert">
    {{session('info')}} 
    </div>   
    @endif
</div> 
@if($area[0]->name === 'Tecnica')
        <button class="btn btn-primary" data-backlog="KEVIN"  data-toggle="modal" data-target="#areaTecnicaModal">Asignar Calificación Tecnica</button>
@endif
@if($area[0]->name === 'Soporte')
        <button class="btn btn-primary" data-backlog="KEVIN"  data-toggle="modal" data-target="#areaSoporteModal">Asignar Calificación Soporte</button>
@endif
@if($area[0]->name === 'Consultoria')
        <button class="btn btn-primary" data-backlog="KEVIN"  data-toggle="modal" data-target="#areaConsultoriaModal">Asignar Calificación Consultoria</button>
@endif

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Backlog #</th>
            <th>Calificación</th>
            <th>IsActive</th>
            <th>IsActive</th>
        </tr>
    </thead>
    <tbody>
        

      @for ($i = 0; $i < count($allBacklogs); $i++)      
        <tr>
        <td>{{$allBacklogs[$i]['name']}}</td>
        <td>{{$allBacklogs[$i]['year']}}</td>

        @if(isset($backlogsUser[$i]['ss_backlog_year_id']))
        <td>{{$backlogsUser[$i]['qualification']}} </td>
        <td>
            <span style="font-size: 25px; color: Dodgerblue;">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            </span>
        </td>
        @else
        <td></td>
        <td>
        <!-- ICONO DE NO ASIGNADO LA CALIFICACION -->
        </td>
        @endif
        </tr>
    @endfor                                               
    </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal AREA TECNICA CALIFICACION -->
<div class="modal fade" id="areaTecnicaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('backlog.create')}}" method="POST">
       {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input  type="text" class="form-control" value="{{$user[0]->name}}" disabled>
    <input name='user_id' type="text" class="form-control" value="{{$user[0]->ss_user_id}}" hidden>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input  type="text" class="form-control" value="Área Técnica" disabled>
    <input name='area_id' type="text" class="form-control" value="2" hidden>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Calificación</label>
    <input name='qualification' type="number" step="0.01" max="100" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input name='description' type="text" class="form-control" required>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect2">Selecionar Backlog</label>
    <select class="form-control" id="exampleFormControlSelect2" name = "ss_backlog_id">
    @foreach ($allBacklogs as $backlog)
    <option value='{{$backlog->ss_backlog_id}}'>{{$backlog->name}}</option>

    @endforeach 
      <!--@if($backlog->qualification === null) -->   <!-- @endif -->
  
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" hidden>IsActive</label>
    <input name="isactive" value='1' type="text" class="form-control" hidden >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>

</div>
  <!-- MODAL AREA DE SOPORTE -->
  <!-- Modal -->
<div class="modal fade" id="areaSoporteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('backlog.create')}}" method="POST">
       {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input  type="text" class="form-control" value="{{$user[0]->name}}" disabled>
    <input name='user_id' type="text" class="form-control" value="{{$user[0]->ss_user_id}}" hidden>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input  type="text" class="form-control" value="Área de Soporte" disabled>
    <input name='area_id' type="text" class="form-control" value="3" hidden>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Calificación</label>
    <input name='qualification' type="number" max="100" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input name='description' type="text" class="form-control" required>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect2">Selecionar Backlog</label>
    <select class="form-control" id="exampleFormControlSelect2" name = "ss_backlog_id">
    @foreach ($allBacklogs as $backlog)
    <option value='{{$backlog->ss_backlog_id}}'>{{$backlog->name}}</option>
    @endforeach 
   
    </select>
  </div> 

  <div class="form-group">
    <label for="exampleInputEmail1" hidden>IsActive</label>
    <input name="isactive" value='1' type="text" class="form-control" hidden >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>


</div>
 <!-- MODAL AREA DE CONSULTORIA -->
  <!-- Modal -->
  <div class="modal fade" id="areaConsultoriaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar calificacion al Backlog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('backlog.create')}}" method="POST">
       {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input  type="text" class="form-control" value="{{$user[0]->name}}" disabled>
    <input name='user_id' type="text" class="form-control" value="{{$user[0]->ss_user_id}}" hidden>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input  type="text" class="form-control" value="Área de consultoria" disabled>
    <input name='area_id' type="text" class="form-control" value="1" hidden>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Calificación</label>
    <input name='qualification' type="number" max="100" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input name='description' type="text" class="form-control" required>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect2">Selecionar Backlog</label>
    <select class="form-control" id="exampleFormControlSelect2" name = "ss_backlog_id">
    @foreach ($allBacklogs as $backlog)
    <option value='{{$backlog->ss_backlog_id}}'>{{$backlog->name}}</option>

    @endforeach 
   
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" hidden>IsActive</label>
    <input name="isactive" value='1' type="text" class="form-control" hidden >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>

</body>

<script>
$(document).ready( function () {
    $('#table_id').DataTable({
      "ordering": false  
    });
} );
     </script>

     <script>
     
     $('#exampleModal').on('show', function (e) {
      var button = e.relatedTarget(),
          modal = $(this),
          backlog = button.data("backlog")
      modal.find('#backlog').val(Backlog)
      console.log(modal.find('#backlog').val(backlog)); 
  });     
     </script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</html>