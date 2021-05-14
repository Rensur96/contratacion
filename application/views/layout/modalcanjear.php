<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Canjear puntos</h4>
      </div>
      <div class="modal-body">
        <p>Ingrese el ID del cliente</p>
        <form action="<?= base_url()?>canjear">
          <div class="input-group">
            <span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span>
            <input id="id" type="text" class="form-control" name="id" >
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default btn-success">Verificar</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
