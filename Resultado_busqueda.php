<html>
<head>
	<title>Tabla</title>
	<meta charset="UTF-8">
	<link rel="StyleSheet" type="text/css" href="CSS/estilo.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="container">
		<header class="he  bg-light">
				 <h5 class="titu_head_bienv">Resultado de Busqueda</h5>
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
					<img src="imagenes/bootstrap-logo.svg" alt="" width="30" height="24">
				</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-left">
                       <ul class="navbar-nav me-left mb-2 mb-lg-0">
											
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="bienvenido.php">Principal</a>
											</li>
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="form_import.php">Importar Datos a MySQL</a>
											</li>
											<li class="nav-item">
											  <a  id="naveg" class="nav-link active" aria-current="page" href="export_excel.php">Exportar Datos</a>
											</li>
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="form_alta.php">Nuevo</a>
											</li>
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="inicioPresentismo.php">Leer codigo de barras</a>
											</li>
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="graficos.php">Graficos</a>
											</li>
											<li class="nav-item dropdown">
											  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="page">
												Listados
											  </a>
											  <ul class="dropdown-menu">
												<li><a class="dropdown-item" href="listados.php?id=Grand">Listado de Alumnos que viven en Grand Bourg</a></li>
												<li><a class="dropdown-item" href="listados.php?id=Mayores">Listado de Alumnos mayores de edad.</a></li>
												<li><a class="dropdown-item" href="listados.php?id=Antes">Listado de Alumnos que nacieron antes del 2008.</a></li>
											  </ul>
											</li>	
											<li class="nav-item dropdown">
											  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="page">
												Reportes
											  </a>
											  <ul class="dropdown-menu">
												<li><a class="dropdown-item" href="reportes.php?id=Viven">Cantidad de Alumnos que viven en Grand Bourg</a></li>
												<li><a class="dropdown-item" href="reportes.php?id=Cant_Mayores">Cantidad de Alumnos mayores de edad.</a></li>
												<li><a class="dropdown-item" href="reportes.php?id=Nacieron">Cantidad de Alumnos que nacieron antes del 2008.</a></li>
											  </ul>
											</li>									
										</ul>
										</div>
                </div>
            </div>
        </nav> 
			</header><br><br><br><br><br><br><br>
<?php
session_start();
 error_reporting(E_ALL^E_NOTICE);
 
 if($_POST['buscar']!="")
	{
		$buscar = $_POST["Busqueda"];

		 $consulta = ("SELECT * FROM usuarios WHERE nombre like '%$buscar%' or dni like '%$buscar%'");
		  $mysql= new mysqli("localhost", "root", "","bd_usuario");
		if($mysql->connect_error)
		die("Error de conexi??n");
		$resultado=mysqli_query($mysql, $consulta);
			$filas=mysqli_num_rows($resultado);
			
			if($buscar=="")
			{?>
				<div class="alert alert-danger w-70px" role="alert">
					No ha ingresado el Nombre o DNI del registro a buscar.
				</div><?php
				//header("location:bienvenido.php");
			}else if($filas>=1)
				{
					echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-4 bg-white'>";
					echo '<table class="table table-striped">';
			 
					echo"<th>Id_usuario</th> <th>DNI</th> <th>Nombre</th> <th>Apellido</th> <th>Cargo</th> <th>Dir</th> <th>Tel</th> <th>Cel</th><th>Usuario</th> <th>Contrase??a</th> <th>Edad</th> <th>Feacha de Nacimiento</th> <th>Permiso</th>";
			 
			 
					while($reg = mysqli_fetch_array($resultado))
					{
						echo "<tr>";
							echo "<td>$reg[id_usuario]</td>";
							echo "<td>$reg[dni]</td>";
							echo "<td>$reg[nombre]</td>";
							echo "<td>$reg[apellido]</td>";
							echo "<td>$reg[cargo]</td>";
							echo "<td>$reg[dir]</td>";
							echo "<td>$reg[tel]</td>";
							echo "<td>$reg[cel]</td>";
							echo "<td>$reg[usuario]</td>";
							echo "<td>$reg[pass] </td>";
							echo "<td>$reg[edad] </td>";
							echo "<td>$reg[fechaNac] </td>";
							echo "<td>$reg[permiso] </td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>";
				}else if($filas==0)
					{?>
						<div class="alert alert-danger" role="alert">
							No existe el registro solicitado.
						</div><?php
							 //header("location:bienvenido.php");
					}
	} 
?>
		<br><br><br><br><br><br><br><br>
		<footer>
		   <div class="container-fluid">
			<div class="row p-5 pb-2 bg-light text-black">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h3">Codigo AV</p>
					<p class="text-secondary">Argentina, Buenos Aires</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Codigos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">html</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">css</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">php</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">JavaScript</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Links</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Torms & conditions</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Privacy Policy</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<p class="h5 mb-3">Contactos</p>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Instagram</a>
					</div>
					<div class="mb-2">
						<a class="text-secondary text-decoration-none" href="#">Facebook</a>
					</div>
					<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Youtube</a>
							</div>
							<div class="mb-2">
								<a class="text-secondary text-decoration-none" href="#">Twitter</a>
							</div>
				</div>
				<div class="col-xs-12 pt-4">
					<p class="text-secondary text-center">Copyright - All rights reserved &copy; 2022</p>
				</div>
				
			</div>
		
		</div>
	</footer>
</div>
</body>
</html>