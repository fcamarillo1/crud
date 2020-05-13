<div id="deleteModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="delete_empleado" id="delete_empleado">
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>¿Seguro que quieres eliminar este registro?</p>
						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
						<input type="hidden" name="delete_id" id="delete_id">
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>


  <?php
  if (!empty($_POST['delete_id'])){
  	require_once ("conexion.php");
      $id=intval($_POST['delete_id']);


  	// DELETE FROM  database
      $sql = "DELETE FROM  empleados WHERE ID_Empleado='$id'";
    #  echo $sql;
      $query = mysqli_query($con,$sql);
      // if product has been added successfully
      if ($query) {
          $messages[] = "El Empleado ha sido eliminado con éxito.";
      } else {
          $errors[] = "Lo sentimos, la eliminación falló. Por favor, regrese y vuelva a intentarlo.";
      }

  	}
  if (isset($errors)){

  			?>
  			<div class="alert alert-danger" role="alert">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  					<strong>Error!</strong>
  					<?php
  						foreach ($errors as $error) {
  								echo $error;
  							}
  						?>
  			</div>
  			<?php
  			}
  			if (isset($messages)){

  				?>
  				<div class="alert alert-success" role="alert">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<strong>¡Bien hecho!</strong>
  						<?php
  							foreach ($messages as $message) {
  									echo $message;
  								}
  							?>
  				</div>
  				<?php
  			}
  ?>
