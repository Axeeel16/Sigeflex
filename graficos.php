<html>
	<head> 
		<title>Graficas</title>
		<meta charset="UTF-8">
		
		<link rel="StyleSheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
		<script src="jquery-3.6.1.min.js"></script>
		<script src="plotly-2.14.0.min.js"></script>
		<link rel="StyleSheet" type="text/css" href="css/estilo.css">
		<link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">	
	</head>
	<body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
	<div class="container">
	<header class="he bg-light">
		<h5 class="titu_head_bienv">
			Graficos
		</h5>
		<nav class="navbar navbar-expand-lg bg-light">
							  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
					<img src="imagenes/bootstrap-logo.svg" alt="" width="30" height="24">
				</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="navbar-nav justify-content-center	mb-2 mb-lg-0">
											
											<li class="nav-item">
											  <a id="naveg" class="nav-link active" aria-current="page" href="bienvenido.php">Principal</a>
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
	</header><br><br><br><br>

	
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-primary">
							<div class="panel panel-heading">
								<!--Graficas con plotly js-->
							</div>
							<div class="panel panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div id="GraficoLineal"></div>
									</div>
									<div class="col-sm-6">
										<div id="GraficoBarras"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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

<script  type="text/javascript">
	$(document).ready(function(){
		$('#GraficoLineal').load('lineal.php');
		$('#GraficoBarras').load('barras.php');
	});
</script>
