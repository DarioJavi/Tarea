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
			<h2>Datos del profesor &raquo; Agregar datos</h2>
			<hr />
			<?php
			if(isset($_POST['add'])){
				$nombres = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["nombres"],ENT_QUOTES)));
				$apellidos = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
				$titulo = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["titulo"],ENT_QUOTES)));
				$edad = mysqli_real_escape_string($conectaBD,(strip_tags($_POST["edad"],ENT_QUOTES)));
				
				$cek = mysqli_query($conectaBD, "SELECT * FROM profesores WHERE nombres='$nombres'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($conectaBD, "INSERT INTO profesores(nombres, apellidos, titulo, edad)
						VALUES('$nombres', '$apellidos', '$titulo', '$edad')") or die(mysqli_error());
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
					<label class="col-sm-3 control-label">Titulo</label>
					<div class="col-sm-4">
						<input type="text" name="titulo" class="form-control" placeholder="titulo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Edad</label>
					<div class="col-sm-4">
						<input type="text" name="edad" class="form-control" placeholder="edad"></input>
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