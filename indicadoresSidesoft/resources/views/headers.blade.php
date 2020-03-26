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
        {{-- Navbar ADMIN--}}
        @include('layouts.menuAdmin')      

    <div class="container">
        <div class="row">
            <div class="col">
            <div class="alert alert-success" role="alert">
                Formulario de Cabeceras.
            </div> 
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Titulo</label>
                    <input type="text" class="form-control" id="inpTitulo" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Valor</label>
                    <input type="text" class="form-control" id="inpValor" placeholder="55.34% ó  35 Dias" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Descripción</label>
                    <input type="text" class="form-control" id="inpDescripcion" required> 
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Nota</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Agregue una nota al registro">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                    <label for="inpIcono">Icono</label>
                    <select id="inpIcono" class="form-control" required>
                        <option selected>Elegir...</option>
                        <option>...</option>
                    </select>
                    </div> 
                    <div class="form-group col-md-4">
                    <label for="inpIcono">Área</label>
                    <select id="inpIcono" class="form-control" required>
                        <option selected>Elegir...</option>
                        @for ($i = 0; $i < count($areas); $i++)
                        <option>{{$areas[$i]->name}}</option>
                        @endfor
                    </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            </div>
            <div class="col">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripción</th> 
                        <th>Valor</th>  
                        <th>Nota</th>
                        <td>Estado</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Proyecto mas demandante</td>
                        <td>Museos de la ciudad</td>
                        <td>55.34 %</td>
                        <td></td>
                        <td>
                        <button type="button" class="btn btn-success">Activar Update</button>
                        <button type="button" class="btn btn-success">DESACTIVAR Update</button>
                        </td>                    </tr>
                    <tr>
                        <td>Proyecto mas demandante</td>
                        <td>Museos de la ciudad</td>
                        <td>55.34 %</td>
                        <td></td>
                        <td>
                        <button type="button" class="btn btn-success">Activar Update</button>
                        <button type="button" class="btn btn-success">DESACTIVAR Update</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
 
</body>
<script>
$(document).ready( function () {
    $('#table_id').DataTable({
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, "Todos"]]

    });
} );
</script>
</html>