<html>
	<head> 
		<title>Graficas</title>
		<meta charset="UTF-8">
		
		<link rel="StyleSheet" type="text/css" href="bootstrap-5.2.0-dist/css/bootstrap.css">
		<script src="jquery-3.6.1.min.js"></script>
		<script src="plotly-2.14.0.min.js"></script>
		<link rel="StyleSheet" type="text/css" href="css/esti_log.css">
		<link href="bootstrap-5.2.0-dist/css/bootstrap.min.css" rel="stylesheet">	
	</head>
	<body>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
			<script src="bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
	<nav class="navbar navbar-expand-lg bg-light">
							  <div class="container-fluid">
									<a class="navbar-brand" href="#">
									  <img src="imagenes/bootstrap-logo.svg" alt="" width="30" height="24">
									</a>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
									  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<li class="nav-item">
										  <a id="naveg" class="nav-link active" aria-current="page" href="form_login.html">Inicio</a>
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
										  <a id="naveg" class="nav-link active" aria-current="page" href="bienvenido.php">Principal</a>
										</li>
									  </ul>
									</div>
							  </div>
						</nav>
	
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-primary">
							<div class="panel panel-heading">
								Graficas con plotly js
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
	 </body>
</html>

<script  type="text/javascript">
	$(document).ready(function(){
		$('#GraficoLineal').load('lineal.php');
		$('#GraficoBarras').load('barras.php');
	});
</script>
