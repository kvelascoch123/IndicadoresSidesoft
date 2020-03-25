{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sidesoft Indicadores</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
                <a class="nav-link"  href='/administrador'>Administrador</a>
                <!--  data-toggle="modal" data-target="#exampleModal" -->
            </li> 
            {{-- <li class="nav-item"> --}}

            <li class="nav-item {{ (request()->is('indicadoresTecnicos')) ? 'active' : '' }}"> 
                <a class="nav-link" href="/indicadoresTecnicos">Indicadores Desarrollo</a>
            </li>
            <li class="nav-item {{ (request()->is('indicadoresFuncionales')) ? 'active' : '' }}">    
                <a class="nav-link" href="/indicadoresFuncionales">Indicadores Funcionales</a>
            </li>        
            <li class="nav-item {{ (request()->is('indicadoresSoporte')) ? 'active' : '' }}">
                <a class="nav-link" href="/indicadoresSoporte">Indicadores Soporte</a>
            </li>
            <li class="nav-item {{ (request()->is('ranking')) ? 'active' : '' }}">
                <a class="nav-link" href="ranking" >Ranking Personal</a>
            </li>                
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> --}}
        </ul>
        {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Codigo de Acceso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <!--FORMULARIO AGREGAR CALIFICACION -->
       <form action="{{ route('backlog.admin')}}" method="POST">
       @csrf 
  <div class="form-group">
    <label for="exampleFormControlInput1">Codigo:</label>
    <input name="codigo" type="text"  class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
      </div>

      <div class="modal-footer" id='codigoSidesoft'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
$('#myModal').on('show.bs.modal', function (e) {
  if (!data) return e.preventDefault() // stops modal from being shown
})
</script>
