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

    </head>
    <body>
    
        {{-- Navbar --}}
        @include('layouts.menu')        

        <div class="container-fluid">

            {{-- Comparativos Indicadores --}}
            {{-- <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-o-left"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">    
                                Backlog Anterior (49)
                                <span class="info-box-number">
                                    77.4<small>%</small>
                                </span>                                        
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
                                    Backlog Actual (50)
                                    <span class="info-box-number">
                                        89.29<small>%</small>
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
                            <span class="info-box-text">Variaci&oacute;n

                                <!-- /.info-box-content -->
                                <table>
                                    <tr>
                                        <td style="padding-right:3px">
                                            <span class="info-box-number text-green"><i class="fa fa-caret-up"></i> {{ round( 89.29  - 77.4, 2)}}% </span>
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
            </div> --}}
            {{-- Comparativos Indicadores --}}

            {{-- Promedio Global Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                <div class="col">

                    <div class="alert alert-warning" role="alert">
                        <h1> Ranking Personal </h1>
                    </div>                           
                                                                   
                </div>    
            </div>                
            {{-- Promedio Global Tecnicos Sidesoft --}}  
            
            {{-- Ranking Personal Funcioanles Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col" style="text-align:center;">

                <table class="table" style="width: 50%; margin-left:25%;margin-right: 25%;">
							
                            <thead class="bg-green">
                                <tr align="center" class="bg-green">
                                    <th scope="col">Consultor</th>
                                    <th scope="col">Cumplimiento Backlog Actual</th> 
                                </tr>                                                                                 
                            </thead>
                            <tbody>
                            @for ($i = 0; $i < count($rankingConsultoria); $i++)
                                <tr align="center">
                                    <th>{{$rankingConsultoria[$i]->name}}</th>
                                    <td>{{$rankingConsultoria[$i]->qualification}}</td>                                                             
                                </tr>                                  
                            @endfor                                                             
                            </tbody>
    
                        </table>                        
                                                
                </div>    
            </div>                
            {{-- Ranking Personal Funcioanles Sidesoft --}}            
            {{-- Ranking Personal Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col" style="text-align:center;">

                    <table class="table" style="width: 50%; margin-left:25%;margin-right: 25%;">
							
                        <thead class="bg-green">
                            <tr align="center" class="bg-green">
                                <th scope="col">Tecnico</th>
                                <th scope="col">Cumplimiento Backlog Actual</th> 
                            </tr>                                                                                 
                        </thead>
                        <tbody>
                        @for ($i = 0; $i < count($rankingTecnico); $i++)
                            <tr align="center">
                                <th scope="row"><img src="{{ asset('images/'.$rankingTecnico[$i]->code_photo) }}" width="67" height="69"></th>
                                <td>{{$rankingTecnico[$i]->qualification}}</td>                                                             
                            </tr>                                  
                        @endfor                                                             
                        </tbody>

                    </table>                    
                                                
                </div>    
            </div>                
            {{-- Ranking Personal Tecnicos Sidesoft --}}         

            {{-- Ranking Personal Soporte Sidesoft --}}
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col" style="text-align:center;">

                <table class="table" style="width: 50%; margin-left:25%;margin-right: 25%;">
							
                            <thead class="bg-green">
                                <tr align="center" class="bg-green">
                                    <th scope="col">Soporte</th>
                                    <th scope="col">Cumplimiento Backlog Actual</th> 
                                </tr>                                                                                 
                            </thead>
                            <tbody>
                            @for ($i = 0; $i < count($rankingSoporte); $i++)
                                <tr align="center">
                                    <th>{{$rankingSoporte[$i]->name}}</th>
                                    <td>{{$rankingSoporte[$i]->qualification}}</td>                                                             
                                </tr>                                  
                            @endfor                                                             
                            </tbody>
    
                        </table>                      
                                                
                </div>    
            </div>                
            {{-- Ranking Personal Soporte Sidesoft --}}               
            
           
        </div>        
                
    
    </body>
</html>



	


				
			
			