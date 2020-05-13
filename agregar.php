<div id="addModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_empleado" id="add_empleado">
					<div class="modal-header">
						<h4 class="modal-title">Agregar Empleado</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Id de Empleado</label>
							<input type="text" name="id"  id="id_empleado" class="form-control" required>

						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="name" id="Nombre" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apellidos" id="apellido" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Sueldo</label>
							<input type="number" name="sueldo" id="sueldo" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Puesto</label>
							<input type="text" name="puesto" id="Puesto" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>


  <?php


  if (!empty($_POST['name'])){
	require_once ("conexion.php");
  $id = mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
	$nombre = mysqli_real_escape_string($con,(strip_tags($_POST["name"],ENT_QUOTES)));
	$apellidos = mysqli_real_escape_string($con,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
	$sueldo = intval($_POST["sueldo"]);
	$puesto = mysqli_real_escape_string($con,(strip_tags($_POST["puesto"],ENT_QUOTES)));


	// REGISTER data into database
    $sql = "INSERT INTO empleados VALUES ('$id','$nombre','$apellidos','$sueldo','$puesto')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El Empleado ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
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
