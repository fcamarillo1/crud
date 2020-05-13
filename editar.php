<div id="editModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_empleado" id="edit" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Editar Empleado</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>ID EMPLEADO</label>
							<input type="text" name="id"  id="id" class="form-control" disabled>
							<input type="hidden" name="edit_id" id="edit_id"  >
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Sueldo</label>
							<input type="number" name="sueldoEdit" id="sueldoEdit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Puesto</label>
							<input type="text" name="puesto" id="puesto" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>






  <?php



if (!empty($_POST['puesto'])){
	require_once ("conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$id = mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
	$nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
	$apellidos = mysqli_real_escape_string($con,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
	$sueldo = intval($_POST["sueldoEdit"]);
	$puesto = mysqli_real_escape_string($con,(strip_tags($_POST["puesto"],ENT_QUOTES)));

	$id=intval($_POST['edit_id']);
	// UPDATE data into database
	$sql = "UPDATE empleados SET ID_Empleado='".$id."', Nombre='".$nombre."', Apellidos='".$apellidos."', Sueldo='".$sueldo."',  Puesto='".$puesto."' WHERE ID_Empleado='".$id."' ";
	$query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El Empleado ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
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
