<?php
	session_start();
	include 'db.php';
	$apellido=$_SESSION['apellido']; //Carga los datos del usuario 
	$nombre=$_SESSION['nombre']; // Carga los datos del usuario 
	$imagen=$_SESSION['imagen'];
	$cargo=$_SESSION['cargo']; // Carga los datos del usuario 
	$DNI=$_SESSION['dni']; // Carga los datos del usuario 			cont_gen

?>
<html>
	<head> 
		<title>Bienvenidos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="StyleSheet" type="text/css" href="css/estil.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">		
	</head>
	<body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="js/bootstrap.min.js"></script>
			
							
	<div class="container">
		<header class="he ">
				 <h4 class="titu_head_bienv">
      <?php encabezado($nombre,$apellido,$cargo,$imagen); //se le asigna los datos que va contener el encabezado 		, $imagen		https://uigradients.com/
					$dni=$_SESSION['dni']; ?>
    </h4>
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
										<form class="d-flex" role="search" method="POST" action="Resultado_busqueda.php">
											<input class="form-control me-2" name="Busqueda" type="search" placeholder="User Name" aria-label="Search">
											<input class="btn btn-outline-primary" type="submit" name="buscar" value="&#128269;">
									  </form>
                </div>
            </div>
        </nav>
					</header><br><br><br><br><br><br>

			
	 
	 <!-- -->
	
			<!-- <H1>Bienvenido</H1><br><br> align="center" 
			<a href='modificar.php' id='$reg[id_usuario]' class=''>
									 <img src='imagenes/eliminar.PNG' width='32px' class=''/>
								 </a>-->
		<?php
		 error_reporting(E_ALL^E_NOTICE);
			// parametros: host,user,password,database
			  $msql= new mysqli("localhost", "root", "","bd_usuario");
			if($msql->connect_error)
			die("Error de conexión");

			$registro = $msql->query("Select * from usuarios")
				or die ($msql->error);
				
			mostrar_tabla_usuario_con_paginacion();
?>

	<!--<footer aria-label="Page navigation example" class="pag_footer">
		<ul class="pagination justify-content-center">
			<li class="page-item">
			  <a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			  </a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
			</li>
		</ul>
	</footer>--><br><br><br><br><br><br><br><br>
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
	<script src="confirmacion.js"></script>
	
	 <!-- Bootstrap 
        <script src="js/bootstrap.bundle.min.js"></script>-->
        <script src="js/bootstrap.bundle.min.js"></script>
  
	 </body>
</html>