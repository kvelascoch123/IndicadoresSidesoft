<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Indicadores Soporte Sidesoft</title>

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

    </head>
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
                        <span class="info-box-icon bg-red"><i class="fa fa-arrow-circle-o-down"></i></span>

                        <div class="info-box-content">
                                <span class="info-box-text">    
                                    Promedio de cierre de ticket
                                    <span class="info-box-number">
                                        3.125 DIAS<small></small>
                                    </span>                                        
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
                            <span class="info-box-text">Satisfacción Cliente

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                        <span class="info-box-number text-green"><i class="fa fa-caret-up"></i> {{ round(3.05, 2)}}/5 </span>
                                            {{-- <span class="info-box-number text-red"><i class="fa fa-caret-down"></i> 10%</span> --}}
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
                <!-- /.col -->

 		<div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-clock-o" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Soporte Mas Demandante

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-text">                                                    
                                                <span class="info-box-number">
                                                    Flopec - 9.25horas
                                                </span>   
						<span class="info-box-number">
                                                    GrupoMB - 7.08horas
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
                            <span class="info-box-text">Historial de Tickets

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-number">
                                                42 Asignados = 60,08%
                                            </span>  
                                             <span class="info-box-number">
                                                19 Espera = 27.05%
                                            </span>
					   <span class="info-box-number">
                                                8 Nuevos = 11.6%
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
                            <span class="info-box-text">Ticket más antiguo

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-number text-red"> 90 - 2019-10-07 - Equiproin</span>
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
                        <h1>Historico - Promedio Global Soporte  <strong>{{round($promedioGlobal,2)}} <strong></h1>
                    </div>                           
                                                                   
                </div>   
            </div>                
            {{-- Promedio Global Tecnicos Sidesoft --}}    

            {{-- Historico Backlogs Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col">
                    {{-- <h1 class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
                        Historico Calificación Tecnicos Sidesoft
                    </h1> --}}

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Historico Backlogs Soporte Sidesoft</li>
                        </ol>
                    </nav>                    

                    <table  class="table" >
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
                            <li class="breadcrumb-item active" aria-current="page">Historico Calificación Soporte Sidesoft</li>
                        </ol>
                    </nav>                    
 
                    <table class="table" >
                        
                        <thead class="bg-green">
                            
                            <tr align="center" class="bg-green">
                                <th scope="col"></th>
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
                            <th scope="row">{{$tarea->name}}</th>
                            
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



	


				
			
			