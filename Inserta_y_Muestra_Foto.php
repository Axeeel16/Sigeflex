<?php
	session_start();
?>
<html>
<head> 
<title> </title> 
<meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
		<link rel="StyleSheet" type="text/css" href="css/estilo.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
</head> 
<body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>
<div class="container">
		<header class="he  bg-light">
				 <h5 class="titu_head_bienv">Inserta y Muestra Foto</h5>
						<nav class="navbar navbar-expand-lg bg-light">
							  <div class="container-fluid">
									<a class="navbar-brand" href="#">
									  <img src="imagenes/bootstrap-logo.svg" alt="" width="30" height="24">
									</a>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
									  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
						</nav> 
			</header><br><br><br>
	
		<!-- <form action="validar_foto.php" method="POST" enctype="multipart/form-data" class="formu_ft">
			 <center> <table border="0">
			<tr>
				<td> <strong>Nombre:</strong></td ><td> <input type="text" name="txtnom" value=" " class="inpu_ft"> </td>
			</tr>
			<tr>
				<td> <strong>Foto:</strong></td ><td> <input type="file" id="foto"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="enviar"  class="inpu_ft"></td>
			</tr>
			
			</table>	</center>
		</form> -->
			<form action="validar_foto.php" method="POST" enctype="multipart/form-data" class="formu_ft">
			<h3 class="titu_import_form">Archivo (.xlsx)*</h3>
			<div class="form-floating mb-3">
				<input type="text" name="txtnom" class="form-control" id="floatingInput" placeholder="name@example.com">
				<label for="floatingInput" class="label">DNI</label>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label"></label>
			  <input class="form-control" type="file"  name="foto"  id="foto">
			</div><br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<input type="submit" class="btn btn-outline-Primary" value="Enviar" name="enviar"></input>
			</div>
		</form>
		<?php
						/*require_once "conexion.php";
						$sql = mysql_query("select * from foto where nombre='$dni'");
						while($res= mysql_fetch_array($sql)){
						//echo $res["nombre"]."<br>";
						echo '<img width="40px" height="40px" src="'.$res["foto"].'" class="">';
						}*/
						?>
						
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
		