<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar registros</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar">
		<?php include ('nav.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del estudiante Semipresencial &raquo; Agregar datos</h2>
			<hr />
			<?php
			if(isset($_POST['add'])){
				$nombres = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["nombres"],ENT_QUOTES)));
				$apellidos = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
				$numero_de_asignaturas = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["numero_de_asignaturas"],ENT_QUOTES)));
				$costo_por_asignatura = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["costo_por_asignatura"],ENT_QUOTES)));
				$costo_matricula = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["costo_matricula"],ENT_QUOTES)));
				$cek = mysqli_query($conectaBD, "SELECT * FROM estudiantes_semipresenciales WHERE nombres='$nombres'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($conectaBD, "INSERT INTO estudiantes_semipresenciales(nombres, apellidos, numero_de_asignaturas, costo_por_asignatura, costo_matricula)
						VALUES('$nombres', '$apellidos', '$numero_de_asignaturas', '$costo_por_asignatura', '$costo_matricula')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
					 
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombres" class="form-control" placeholder="nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido</label>
					<div class="col-sm-4">
						<input type="text" name="apellidos" class="form-control" placeholder="apellidos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Número de Asignaturas</label>
					<div class="col-sm-4">
						<input type="text" name="numero_de_asignaturas" class="form-control" placeholder="número de asignaturas" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Costo por Asignatura</label>
					<div class="col-sm-4">
						<input type="text" name="costo_por_asignatura" class="form-control" placeholder="costo por asignatura" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Costo Matrícula</label>
					<div class="col-sm-4">
						<input type="text" name="costo_matricula" class="form-control" placeholder="costo matrícula"></input>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
</body>
</html>