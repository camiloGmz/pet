
<!-- Modal -->
<div class="modal fade" id="MhacerDenuncia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border-warning">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Realizar denuncia</h5>
        <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../ruta.php?variable=new_denuncia" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Direccion</label>
    <input type="text" class="form-control" id="direccionDenuncia" placeholder="Donde ocurrio el caso" name="direccion" required autofocus="autofocus">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Denuncio que:</label>
    <textarea class="form-control" rows="3" id="denuncia" placeholder="Describe la denuncia" name="descripcion" required autofocus="autofocus"></textarea>
    <!--<input type="text" class="form-control" id="denuncia" placeholder="Describe la denuncia" name="">-->
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">cargar imagen</label>
    <input type="file" class="form-control-file" id="imagenDenuncia" name="imagen">
  </div>
      </div>
      <div class="modal-footer bg-secondary">
        <button type="submit" class="btn btn-secondary bg-warning text-dark" >denunciar</button>
        <button type="reset" class="btn btn-primary bg-danger text-dark" data-dismiss="modal">cancelar</button>
      </div>
</form>

    </div>
  </div>
</div>