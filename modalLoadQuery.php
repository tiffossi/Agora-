<div class="modal fade" id="smallModal" tabindex="1" role="dialog" aria-labelledby="smallModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Seleccione una Consulta</h4>
      </div>
      <div class="modal-body text-center">
          <form action="formLoadQuery.php" method="POST" class="form-inline" role="form">
            <div class="form-group">
              <!-- <label class="control-label" for="nameQ">Cargar consulta</label> -->
                <select class="form-control" id="nameQ" name="nameQ">
                  <?php 
                  include 'functions/dataFields.php'; 
                    showQueries();
                  ?>
                </select>
                <button type="submit" class="btn btn-button">Cargar</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>