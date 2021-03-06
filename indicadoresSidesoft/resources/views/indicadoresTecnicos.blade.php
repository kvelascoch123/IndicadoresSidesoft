<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Indicadores Tecnicos Sidesoft</title>


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
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>   </head>
    <body>
    
        {{-- Navbar --}}
        @include('layouts.menu')        

        <div class="container-fluid">

            {{-- Comparativos Indicadores --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-o-left"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">  
                            @if($data)  
                                Backlog Anterior ({{$data[2][0]->ss_backlog_id}}  - 2020)
                                <span class="info-box-number">
                                {{round($data[3],2)}}<small>%</small>
                                </span> 
                                @else
                                Backlog Anterior
                            @endif                                     
                            </span> 
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-arrow-circle-o-down"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">  
                            @if($data)   
                                Backlog Actual ({{$data[0][0]->ss_backlog_id}}  - 2020)
                                <span class="info-box-number">
                                {{round($data[1],2)}}<small>%</small>                                     
                                </span> 
                                @else
                                Backlog Actual
                            @endif
                            </span> 
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Variaci&oacute;n

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                        @if($data) 
                                            <span class="info-box-number text-green">
                                            <i class="fa fa-caret-up"></i> 
                                            {{round($data[1] - $data[3],2)}} % 
                                            </span>
                                            @else
                                            0 
                                        @endif
                                        </td>
                                    </tr>
                                </table>

                            </span>

                            <small></small> <!-- NO BORRAR EL SMALL LINKEADO CON CHART -->


                        </div>

                        <!-- /.description-block -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-clock-o" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Proyecto Mas Demandante Backlog 04

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-text">                                                    
                                                <span class="info-box-number">
                                                    Museos de la Ciudad  - 59.5 horas
                                                    <span class="info-box-number text-green"> 55.34  <i class="fa fa-percent" aria-hidden="true"></i></span>
                                                </span>                                        
                                            </span>
                                        </td>
                                    </tr>
                                </table>

                            </span>

                            <small></small> <!-- NO BORRAR EL SMALL LINKEADO CON CHART -->


                        </div>

                        <!-- /.description-block -->
                    </div>
                    <!-- /.info-box --> 
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-cogs" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Compilaciones Backlog 04

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-number">
                                                1 sin novedades
                                            </span>  
                                            
                                        </td>
                                    </tr>
                                </table>

                            </span>

                            <small></small> <!-- NO BORRAR EL SMALL LINKEADO CON CHART -->


                        </div>

                        <!-- /.description-block -->
                    </div>
                    <!-- /.info-box -->
                </div>      
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-calendar" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Hora Retrabajo Backlog 04

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-number text-red"> 0 Horas</span>
                                        </td>
                                    </tr>
                                </table>

                            </span>

                            <small></small> <!-- NO BORRAR EL SMALL LINKEADO CON CHART -->


                        </div>

                        <!-- /.description-block -->
                    </div>
                    <!-- /.info-box -->
                </div>                  
 
            </div>
            {{-- Comparativos Indicadores --}}

            {{-- Promedio Global Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                <div class="col">
                    
                    <div class="alert alert-warning" role="alert">
                        <h1>Promedio Global Desarrollo 2020:  <strong>{{round($promedioGlobal,2)}} <strong></h1>
                    </div>                         
                                                                   
                </div>    
            </div>                
            {{-- Promedio Global Tecnicos Sidesoft --}}  
            
            {{-- Historico Backlogs Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Historico Backlogs Tecnicos Sidesoft</li>
                        </ol>
                    </nav>                    

 <table   class="table" >
    <thead class="bg-green">
        <tr align="center">
            <th>Backlog #</th>
            <th>Promedio del Backlog</th>
            <th>Diferencia con el anterior</th>
        </tr>
    </thead>
    <tbody>
    @for ($i = 0; $i < count($promediosArray); $i++)
    @if($promediosArray[$i]['promedio'] != null)
    <tr align="center" >
    <td>{{$promediosArray[$i]['backlog']}}</td>
    <td>{{$promediosArray[$i]['promedio']}}</td>
    @if(($promediosArray[$i] === $promediosArray[0] ))
    <td><span class="info-box-number text-blue"><i class="fa fa-arrows-h"></i> 0 </span></td> 
    @endif
    @if(($promediosArray[$i] != $promediosArray[0] ))
        @if(($promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio'] ) > 0)
        <td><span class="info-box-number text-green"><i class="fa fa-caret-up"></i> {{$promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio']}} </span></td> 
        @endif
        @if(($promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio']) < 0)
        <td><span class="info-box-number text-red"><i class="fa fa-caret-down"></i> {{$promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio']}} </span></td> 
        @endif
        @if(($promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio']) === 0)
        <td><span class="info-box-number text-blue"><i class="fa fa-arrows-h"></i> {{$promediosArray[$i]['promedio'] - $promediosArray[$i-1]['promedio']}} </span></td> 
        @endif
    @endif
   

</tr>    

@endif                  
    @endfor   

    </tbody>
</table>
                    
                                                
                </div>    
            </div>                
            {{-- Historico Backlogs Tecnicos Sidesoft --}}


            {{-- Historico Calificación Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col">
                    {{-- <h1 class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
                        Historico Calificación Tecnicos Sidesoft
                    </h1> --}}

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Historico Calificación Tecnicos Sidesoft</li>
                        </ol>
                    </nav>  
 
           

                    <table id="table_id" class="table">
                        
                        <thead class="bg-green">
                            
                            <tr align="center" class="bg-green">
                                <th># Backlog</th>
                                <!--Enlistar Usuarios-->
                                @foreach ($usuarios as $nombre)
                                <th scope="col">{{$nombre}}</th>
                                @endforeach 

                            </tr>
                        </thead>
 
                        <tbody>
                        @if(!empty($usersBacklogs))
                                <!--Enlistar Usuarios-->
                         
                            @foreach ($backlogs as $tarea)
                            <tr align="center" >
                              <th>{{$tarea->name}}</th>
                                 
                                @foreach ($usersBacklogs as $userValue)
                                @if ($tarea->name === $userValue->backlog) 
                                    <td> <a href="/getBaklogYear/{{$userValue->ss_backlog_year_id}}/politics/{{$userValue->ss_backlog_id}}/{{$userValue->ss_user_id}}/{{$userValue->ss_area_id}}"> {{$userValue->qualification}}  // {{$userValue->points_politics}} </a>
                                    
                                    @if($userValue->points_politics < 0)
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
{{$userValue->qualification + $userValue->points_politics}}
                                    @endif
                                    @if($userValue->points_politics > 0)
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
{{$userValue->qualification + $userValue->points_politics}}
                                    @endif
                                    @if($userValue->points_politics == 0)
                                   
                                    @endif
                                     </td>
                                @endif 
                                @endforeach       
                            </tr>
                            @endforeach     
                        @endif                                                                                                                                                                                                                               
                        </tbody>

                    </table>
                                              
                </div>    
            </div>
            {{-- Historico Calificación Tecnicos Sidesoft --}}

            {{-- Grafica Comparativa --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 80px;">
                <div class="col">    
                    {{-- <h1 class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
                        Grafica Comparativa
                    </h1> --}}
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Grafica Comparativa</li>
                        </ol>
                    </nav>                     
                    <div class="col" style="border: 1px solid black;">
                        <canvas id="myChart" width="50" height="20"></canvas>
                    </div>
                </div>    
            </div>  
            {{-- Grafica Comparativa --}}
            
        </div>      
        
        <script>
        new Chart(document.getElementById("myChart"), {
        type: 'line',
        data: {
            labels: [
                @for ($i = 0; $i < count($backlogs); $i++)
                @if($promediosArray[$i]['promedio'] != null)
                                "Backlog" + {{$backlogs[$i]->ss_backlog_id}},
                    @endif
               @endfor
                
            ],
            datasets: [ 
                { 
                    data: [0,0,60.83,30,65.74,58.63,0,0],
                    label: "Carlos Chiza",
                    borderColor: "#3e95cd",
                    fill: false,
                    lineTension: 0,
                    pointStyle: 'rectRounded',
                    pointRadius: 8,
                    borderDash: [5, 5],
                }, 
                { 
                    data: [0,71.84,66.95,62.42,65.74,67.80,53.75,100],
                    label: "Andres Montenegro",
                    borderColor: "#8e5ea2",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
                { 
                    data: [0,56.04,71.06,49.17,65.74,24.25,62.94,41.76],
                    label: "Luis Mosquera",
                    borderColor: "#3cba9f",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
                { 
                    data: [0,93.53,97.83,97.3,65.74,73.21,62.94,62.94],
                    label: "Fabio Paredes",
                    borderColor: "#e8c3b9",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
              
            ]
        },
        options: {
            title: {
                display: true,
                text: ''
            },
            legend: {
                display: true,
                position: 'top',
                labels: {
                    boxWidth: 80,
                    fontColor: 'black'
                }   
            }            
        }
        });

    </script>  	
             
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



	


				
			
			