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
            <div class="row" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-o-left"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">    
                                Backlog Anterior (47)
                                <span class="info-box-number">
                                    89.19<small>%</small>
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
                                    Backlog Actual (48)
                                    <span class="info-box-number">
                                        93.75<small>%</small>
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
                                        <span class="info-box-number text-green"><i class="fa fa-caret-up"></i> {{ round(93.75 - 89.19, 2)}}% </span>
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
            </div>
            {{-- Comparativos Indicadores --}}

            {{-- Promedio Global Tecnicos Sidesoft --}}
            <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                <div class="col">

                    <div class="alert alert-warning" role="alert">
                        <h1>Promedio Global Desarrollo <strong>{{ round( (( 75 + 73 + 91.25 + 85.40 + 83.86 +  86.24 + 89.19 + 93.75) / 8 ) , 2) }} <strong></h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Historico Backlogs Tecnicos Sidesoft</li>
                        </ol>
                    </nav>                    

                    <table class="table">
                        
                        <thead class="bg-green">
                            <tr align="center" class="bg-green">
                                <th scope="col"></th>
                                <th scope="col">Promedio del Backlog</th>
                                <th scope="col">Diferencia con el anterior</th>                                                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <th scope="row">Backlog 41</th>
                                <td>75</td>
                                <td><span class="info-box-number text-blue"><i class="fa fa-arrows-h"></i> 0% </span></td>                               
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 42</th>
                                <td>73</td>
                                <td><span class="info-box-number text-red"><i class="fa fa-caret-down"></i> 2% </span></td>                               
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 43</th>
                                <td>91.25</td>
                                <td><span class="info-box-number text-green"><i class="fa fa-caret-up"></i> 18.25% </span></td>                              
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 44</th>
                                <td>85.40</td>
                                <td><span class="info-box-number text-red"><i class="fa fa-caret-down"></i> 5.85% </span></td>                              
                            </tr>                        
                            <tr align="center">
                                <th scope="row">Backlog 45</th>
                                <td>83.86</td>
                                <td><span class="info-box-number text-red"><i class="fa fa-caret-down"></i> 1.54% </span></td> 
                            </tr>                         
                            <tr align="center">
                                <th scope="row">Backlog 46</th>
                                <td>86.24</td>
                                <td><span class="info-box-number text-green"><i class="fa fa-caret-up"></i> 2.38% </span></td>                      
                            </tr>                         
                            <tr align="center">
                                <th scope="row">Backlog 47</th>
                                <td>89.19</td>
                                <td><span class="info-box-number text-green"><i class="fa fa-caret-up"></i> 2.95% </span></td>
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 48</th>
                                <td>93.75</td>
                                <td><span class="info-box-number text-green"><i class="fa fa-caret-up"></i> {{ (93.75 - 89.19) }}% </span></td>
                            </tr>    
                            <tr align="center">
                                <th scope="row">Backlog 49</th>
                                <td>0</td>
                                <td><span class="info-box-number text-blue"><i class="fa fa-arrows-h"></i> 0% </span></td>                              
                            </tr>                                                                                                                                                                        
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

                    <table class="table">
                        
                        <thead class="bg-green">
                            <tr align="center" class="bg-green">
                                <th scope="col"></th>
                                <th scope="col">Carlos Chiza</th>
                                <th scope="col">Andres Montenegro</th>
                                <th scope="col">Luis Mosquera</th>
                                <th scope="col">Daniel Singana</th>
                                <th scope="col">Rodney Jacome</th>                                                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr align="center">
                                <th scope="row">Backlog 41</th>
                                <td>17.71</td>
                                <td>63.54</td>
                                <td>100</td>
                                <td>90</td>
                                <td>83.69</td>
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 42</th>
                                <td>53.52</td>
                                <td>100</td>
                                <td>100</td>
                                <td>50.7</td>
                                <td>33.8</td>                               
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 43</th>
                                <td>65.85</td>
                                <td>100</td>
                                <td>100</td>
                                <td>89.48</td>
                                <td>92.18</td>                               
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 44</th>
                                <td>78.41</td>
                                <td>87.96</td>
                                <td>100</td>
                                <td>75.28</td>
                                <td>70.74</td>                               
                            </tr>                        
                            <tr align="center">
                                <th scope="row">Backlog 45</th>
                                <td>73.85</td>
                                <td>91.96</td>
                                <td>100</td>
                                <td>64.29</td>
                                <td>73.04</td> 
                            </tr>                         
                            <tr align="center">
                                <th scope="row">Backlog 46</th>
                                <td>77.81</td>
                                <td>73.32</td>
                                <td>100</td>
                                <td>0</td>
                                <td>81.94</td>                               
                            </tr>                         
                            <tr align="center">
                                <th scope="row">Backlog 47</th>
                                <td>78.57</td>
                                <td>97.22</td>
                                <td>100</td>
                                <td>0</td>
                                <td>70.14</td>                                
                            </tr>
                            <tr align="center">
                                <th scope="row">Backlog 48</th>
                                <td>75</td>
                                <td>100</td>
                                <td>100</td>
                                <td>0</td>
                                <td>0</td>                                
                            </tr>  
                            <tr align="center">
                                <th scope="row">Backlog 49</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>                                
                            </tr>  
                            <tr align="center">
                                <th scope="row">Backlog 50</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>                                
                            </tr>                                                                                                                                                                                                    
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
                "Backlog 40", 
                "Backlog 41", 
                "Backlog 42", 
                "Backlog 43", 
                "Backlog 44", 
                "Backlog 45", 
                "Backlog 46", 
                "Backlog 47",
                "Backlog 48",
                "Backlog 49",
                "Backlog 50",
                "Backlog 51",
                "Backlog 52",
            ],
            datasets: [
                { 
                    data: [0,17.71,53.52,65.85,78.41,73.85,77.81,78.57,75,50,50,50,50],
                    label: "Carlos Chiza",
                    borderColor: "#3e95cd",
                    fill: false,
                    lineTension: 0,
                    pointStyle: 'rectRounded',
                    pointRadius: 8,
                    borderDash: [5, 5],
                }, 
                { 
                    data: [0,63.54,100,100,87.96,91.96,73.32,97.22,100,50,50,50,50],
                    label: "Andres Montenegro",
                    borderColor: "#8e5ea2",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
                { 
                    data: [0,100,100,100,100,100,100,100,100,50,50,50,50,50],
                    label: "Luis Mosquera",
                    borderColor: "#3cba9f",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
                { 
                    data: [0,83.69,33.8,92.18,70.74,73.04,81.94,70.14,0,0,0,0,0],
                    label: "Rodney Jacome",
                    borderColor: "#e8c3b9",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }, 
                { 
                    data: [0,90,50.7,89.48,75.28,64.29,0,0,0,0,0,0,0],
                    label: "Daniel Singana",
                    borderColor: "#c45850",
                    fill: false,
                    lineTension: 0,
                    pointRadius: 8,
                }
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
                
    <script>
    //   var mi_primer_grafico ={
    //     type:"doughnut",//seleccionamos el tipo de grafico, en este caso es un grafico estilo pie, en esta parte podemos cambiar el tipo de grafico por el que deseamos
    //     data:{
    //       datasets:[{
    //         data:[1,2,4,6 ],//esta es la data, podemos pasarle variables directamente desde el backend usando blade de la siguiente forma
    //         backgroundColor: [//seleccionamos el color de fondo para cada dato que le enviamos
    //           "#04B404","#FFBF00",  "#FF0000",  "#04B4AE",
    //          ],
    //       }],
    //       labels: [//añadimos las etiquetas correspondientes a la data
    //         "Dato1",  "Dato2", "Dato3", "Dato4",  
    //          ]
    //     },
    //     options:{//le pasamos como opcion adicional que sea responsivo
    //       responsive: true,
    //     }
    //   }
      
    //   var primer_grafico = document.getElementById('grafico').getContext('2d');//seleccionamos el canvas
    //   window.pie = new Chart(primer_grafico,mi_primer_grafico);//le pasamos el grafico y la data para representarlo      

//     var ctx = document.getElementById("myChart");
//   var myChart = new Chart(ctx, {
//     type: 'line',
//     data: {
//       labels: ["Backlog 40", "Backlog 41", "Backlog 42", "Backlog 43", "Backlog 44", "Backlog 45", "Backlog 46", "Backlog 47"],
//       datasets: [{
//         label: ['CC', 'AM', 'RJ', 'LM'],
//         data: [12, 19, 3, 5, 2, 3],
//         backgroundColor: [
//           'rgba(255, 99, 132, 0.2)',
//           'rgba(54, 162, 235, 0.2)',
//           'rgba(255, 206, 86, 0.2)',
//           'rgba(75, 192, 192, 0.2)',
//           'rgba(153, 102, 255, 0.2)',
//           'rgba(255, 159, 64, 0.2)'
//         ],
//         borderColor: [
//           'rgba(255,99,132,1)',
//           'rgba(54, 162, 235, 1)',
//           'rgba(255, 206, 86, 1)',
//           'rgba(75, 192, 192, 1)',
//           'rgba(153, 102, 255, 1)',
//           'rgba(255, 159, 64, 1)'
//         ],
//         borderWidth: 1
//       }]
//     },
//     options: {
//       scales: {
//         yAxes: [{
//           ticks: {
//             beginAtZero: true
//           }
//         }]
//       }
//     }
//   });      
    
    </script>

    </body>
</html>



	


				
			
			