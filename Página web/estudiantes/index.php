<?php
	include('conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestión</title>
 
	<!-- Enlace de css bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
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
			<h2>Lista de profesores</h2>
			<hr/>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
	                    <th>id</th>
						<th>Nombres</th>
						<th>Apellidos</th>
	                    <th>Titulo</th>
	                    <th>Edad</th>
					</tr>
					<?php
					$sql = mysqli_query($conectaBD, "SELECT * FROM profesores ORDER BY id ASC");
					if(mysqli_num_rows($sql) == 0){
						echo '<tr><td colspan="8">No hay datos.</td></tr>';
					}else{
						$no = 1;
						while($row = mysqli_fetch_assoc($sql)){
							echo '
							<tr>
								<td>'.$row['id'].'</td>
								<td>'.$row['nombres'].'</td>
								 <td>'.$row['apellidos'].'</td>
	                            <td>'.$row['titulo'].'</td>
	                            <td>'.$row['edad'].'</td>';
							$no++;
						}
					}
					?>
				</table>
			</div>
		</div>
	</div> 
	<div class="container">
		<div class="content">
			<h2>Lista de Estudiantes Modalidad Semipresencial</h2>
			<hr/>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
	                    <th>id</th>
						<th>Nombres</th>
						<th>Apellidos</th>
	                    <th>Números de asignaturas</th>
	                    <th>Costo de asignaturas</th>
						<th>Costo de matrícula</th>	
					</tr>
					<?php
					$sql = mysqli_query($conectaBD, "SELECT * FROM estudiantes_semipresenciales ORDER BY id ASC");
					if(mysqli_num_rows($sql) == 0){
						echo '<tr><td colspan="8">No hay datos.</td></tr>';
					}else{
						$no = 1;
						while($row = mysqli_fetch_assoc($sql)){
							echo '
							<tr>
								<td>'.$row['id'].'</td>
								<td>'.$row['nombres'].'</td>
								 <td>'.$row['apellidos'].'</td>
	                            <td>'.$row['numero_de_asignaturas'].'</td>
	                            <td>'.$row['costo_por_asignatura'].'</td>
								<td>'.$row['costo_matricula'].'</td>';
							$no++;
						}
					}
					?>
				</table>
			</div>
		</div>
	</div> 
	<center>
		<p>&copy; UTPL - Desarrollo Web <?php echo date("Y");?></p>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</center>
</body>
</html>