<?php
 error_reporting(E_ALL^E_NOTICE);
$msql = mysqli_connect("localhost", "root", "", "bd_usuario");

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query ($msql, $consulta) or die (mysql_error());

$usuarios = array();
while($rows = mysqli_fetch_assoc($resultado))
{
	$usuarios[] = $rows;
}

//mysqli_close($msql);


?>
<html>
	<head>
		<title>Exportar Datos</title>
		<meta charset="UTF-8">
	</head>
		<body>

		<div class="cont_gen">
	
				<table id="" class="table table-striped">
					<tr>
						<th>id_usuario</th>
						<th>DNI</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cargo</th>
						<th>Dir</th>
						<th>Tel</th>
						<th>Cel</th>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Edad</th>
						<th>Fecha Nac</th>
						<th>Permiso</th>
					</tr>
						
					<tbody>
						<?php foreach($usuarios as $usuario) 
						{ ?>
							<tr>
								<td><?php echo $usuario ['id_usuario']; ?></td>
								<td><?php echo $usuario ['dni']; ?></td>
								<td><?php echo $usuario ['nombre']; ?></td>
								<td><?php echo $usuario ['apellido']; ?></td>
								<td><?php echo $usuario ['cargo']; ?></td>
								<td><?php echo $usuario ['dir']; ?></td>
								<td><?php echo $usuario ['tel']; ?></td>
								<td><?php echo $usuario ['cel']; ?></td>
								<td><?php echo $usuario ['usuario']; ?></td>
								<td><?php echo $usuario ['pass']; ?></td>
								<td><?php echo $usuario ['edad']; ?></td>
								<td><?php echo $usuario ['fechaNac']; ?></td>
								<td><?php echo $usuario ['permiso']; ?></td>
							</tr>
						<?php } ?>
						</tbody>
				</table>
						
				<div class="cont_exp">
					<div class="div_form">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="f_exp">
						<div class="d-grid gap-2 col-1 mx-auto">
							<button type="submit" class="btn btn-outline-primary" id="export_data" name="export_data" value="Export to excel">Enviar</button>
						</div>
							</form>
					</div>
				</div>
			
		
	<?php
	
	
	if(isset($_POST["export_data"])) {
if(!empty($usuarios)) {
$filename = "usuario.xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$filename);
$mostrar_columnas = false;
foreach($usuarios as $usuario) {
if(!$mostrar_columnas) {
echo implode("\t", array_keys($usuario)) . "\n";
$mostrar_columnas = true;
}
//echo implode("\t", array_values($usuario)) . "\n";
}
}else{
echo 'No hay datos a exportar';
}
exit;
}
	
	
	
/*	
	if(isset($_POST["export_data"])){
		if(!empty($usuarios)) {
			$filename = "usuarios.xls";
			header("Content-Type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename=".$filename);
			$mostrar_columnas = false;
			
			foreach($usuarios as $usuario) {
				if(!$mostrar_columnas) {
					echo implode("\t", array_keys($usuario)) . "\n";
					$mostrar_columnas = true;
				}
				echo implode("\t", array_values($usuario)) . "\n";
			}
		}else{
			echo 'No hay datos a exportar';
		}
		exit;
	}*/
				
	?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<footer class="pie_pag bg-light">
				<div class="grupo_1">
					<div class="box">
						<figure>
							<a href="#">
								<!--<img src="imagenes/dub.jpg" alt="dub"> <!--ANCLA: anchor-solid.svg -->
							</a>
						</figure>
					</div>
					<div class="box">
							<h2>Sobre nosotros</h2>
							<p>Font Awesome is the internet's icon library and toolkit used by millions of designers, developers, and content creators.</p>
					</div>
					<div class="box">
						<h2>Siguenos</h2>
						<div class="red_social">
					<a href="#" class="bi bi-facebook"></a>
					<a href="#" class="bi bi-instagram"></a>
					<a href="#" class="bi bi-twitter"></a>
					<a href="#" class="bi bi-youtube"></a>
				</div>
					</div>
				</div>
				<div class="grupo_2">
					<small>&copy; 2022 <b>Dubai</b> - Todos los Derechos Reservados. </small>
				</div>
			</footer>
		</div>
	</body>
</html>
