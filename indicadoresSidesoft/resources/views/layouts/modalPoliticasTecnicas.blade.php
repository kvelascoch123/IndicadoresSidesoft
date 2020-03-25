<div class="modal fade bd-example-modal-lg " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content" >
      <div class="modal-header bg-success">
        <h5 class="modal-title "  id="exampleModalLabel">Aplicar políticas.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('politics.qualification')}}" method="POST" >
        {{ csrf_field() }}
        <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Backlog:</label>
            <input type="text" class="form-control" id="backlog-name" readonly>
          </div>    </div>
    <div class="col-sm">
    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="user-name" readonly>
          </div>    </div>
    <div class="col-sm">
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Área:</label>
            <input type="text" class="form-control" id="area-name" readonly>
          </div>   
    </div>
    <div class="col-sm"> 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descripción:</label>
            <input type="text" class="form-control" name="description"  id="description" >
          </div>   
     </div>
  </div>
</div>
        
          <div class="form-group"hidden>
            <label for="recipient-name" class="col-form-label">Backlog id:</label>
            <input type="text" class="form-control" id="backlog-id" name="backlog_id" readonly>
          </div>
    
          <div class="form-group" hidden>
            <label for="recipient-name" class="col-form-label">Usuario id:</label>
            <input type="text" class="form-control" id="user-id" name="usuario_id" readonly>
          </div>
      
          <div class="form-group" hidden>
            <label for="recipient-name" class="col-form-label">Área id:</label>
            <input type="text" class="form-control" id="area-id" name="area_id" readonly>
          </div>


          <table  class="table table-hover table-primary">
<thead class="thead-dark">
<tr>
<th>Politica</th>
<th>Tipo</th>
<th>Puntos</th>
<th>Asignar</th>
</tr>
</thead>
<tbody>
@for ($i = 0; $i < count($politics); $i++)
<tr>
<td> {{$politics[$i]->descripcion}} </td>
<td> {{$politics[$i]->type}} </td>
<td> {{$politics[$i]->points}} </td>
<td> 
<input type="checkbox" name="ss_politics_check[]" value="{{$politics[$i]->ss_politics_id}}"> </br>
<!--<a href="addToCalification/{{$politics[$i]->ss_politics_id}}" type="button" class="btn btn-primary" > Aplicar </button>
--></td>
</tr>
@endfor
</table> 
<button type="submit" class="btn btn-primary">Guardar</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
$('#exampleModal2').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  var backlogName = button.data('backlog') // Extract info from data-* attributes
  var backlogId = button.data('id') // Extract info from data-* attributes
  var userName = button.data('user') // Extract info from data-* attributes
  var userId = button.data('uid') // Extract info from data-* attributes
  var areaName = button.data('area') // Extract info from data-* attributes
  var areaId = button.data('aid') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Asignar Políticas Sidesoft')
  modal.find('.modal-body #Backlog').val(recipient)
  modal.find('.modal-body #backlog-name').val(backlogName)
  modal.find('.modal-body #backlog-id').val(backlogId)
  modal.find('.modal-body #user-name').val(userName)
  modal.find('.modal-body #user-id').val(userId)
  modal.find('.modal-body #area-name').val(areaName)
modal.find('.modal-body #area-id').val(areaId)
})
</script>
<!--
<script>

$('#politicsModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
var backlogName = button.data('backlog') // Extract info from data-* attributes
var backlogId = button.data('id') // Extract info from data-* attributes
var userName = button.data('user') // Extract info from data-* attributes
var userId = button.data('uid') // Extract info from data-* attributes
var areaName = button.data('area') // Extract info from data-* attributes
var areaId = button.data('aid') // Extract info from data-* attributes
var recipient = button.data('whatever') // Extract info from data-* attributes

// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-title').text('Asignar politica al ' + backlogName)
modal.find('.modal-body #backlog-name').val(backlogName)
modal.find('.modal-body #backlog-id').val(backlogId)
modal.find('.modal-body #user-name').val(userName)
modal.find('.modal-body #user-id').val(userId)
modal.find('.modal-body #area-name').val(areaName)
modal.find('.modal-body #area-id').val(areaId)

console.log("MODAL START");
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
modal.find('.modal-body #recipient-name').val(recipient)

});

$(document).ready(function() {
$('#example').DataTable();
"pageLength": 50
} );

$(document).ready(function() {
$('#example2').DataTable();
} );
</script>

-->