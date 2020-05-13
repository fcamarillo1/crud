<?php


	require_once ("conexion.php");

	$query = mysqli_query($con,"SELECT * FROM  empleados");

	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>id_empleado</th>
						<th>Nombre </th>
						<th>Apellidos </th>
						<th class='text-center'>Salario</th>
						<th class='text-right'>Puesto</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						<?php
						$finales=0;
						while($row = mysqli_fetch_array($query)){
							$id=$row['ID_Empleado'];
							$nombre=$row['Nombre'];
							$apellidos=$row['Apellidos'];
							$sueldo=$row['Sueldo'];
							$puesto=$row['Puesto'];
							$finales++;

						?>

						<tr>
							<td class='text-center'><?php echo $id;?></td>
							<td ><?php echo $nombre;?></td>
							<td ><?php echo $apellidos;?></td>
							<td class='text-center' ><?php echo number_format($sueldo,2);?></td>
							<td class='text-right'><?php echo $puesto;?></td>
							<td>
								<a href="#"  data-target="#editModal" class="edit" data-toggle="modal" data-id='<?php echo $id;?>' data-name="<?php echo $nombre?>" data-apellido="<?php echo $apellidos?>" data-sueldo="<?php echo $sueldo?>" data-puesto="<?php echo $puesto;?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
								<a href="#deleteModal" class="delete" data-toggle="modal" data-id="<?php echo $id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    		</td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'>
								<?php
									$inicios=$offset+1;
									$finales+=$inicios -1;
									echo "Mostrando $inicios al $finales de $numrows registros";

								?>
							</td>
						</tr>
				</tbody>
			</table>
		</div>



	<?php


?>
