
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Empleados </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</head>
<body>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Crud <b>Empleados</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Empleado</span></a>
					</div>
                </div>
            </div>

			<div class='clearfix'>

      </div>
			<hr>
			<div id="loader"></div>
			<div id="resultados"></div>
			<div class='outer_div'></div>


        </div>
    </div>
	<!-- Edit Modal HTML -->
	<?php include("agregar.php");?>
	<!-- Edit Modal HTML -->
	<?php include("editar.php");?>
	<!-- Delete Modal HTML -->
	<?php include("eliminar.php");?>
	<script src="script.js"></script>
</body>
</html>
