<?php
 session_start();
 ?>
<html>
  <head> 
    <title>Alta de registro</title>
    <meta charset="UTF-8">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
			<link rel="StyleSheet" type="text/css" href="css/estilo.css">
	    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
<div class="container">
	<header margen-left="500px" class="he bg-light">
					<h5 class="titu_head_bienv">Alta de Registro</h5>
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
											  <a id="naveg" class="nav-link active" aria-current="page" href="bienvenido.php">Principal</a>
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
				</header><br><br><br>
	
	<div class="d_alt">
		<!-- <form  class="formu_alt" action="form_alta.php" method="POST">
			<h2 class="titu_form_alt">Formulario</h2>
			<input class="inpu" type="text" name="dni" placeholder="dni"></input> <br>
			 
			<input class="inpu" type="text" name="nombre" placeholder="Nombre"></input> <br>
			 
			<input class="inpu" type="text" name="apellido" placeholder="Apellido"></input> <br>
			
			<input class="inpu" type="text" name="cargo" placeholder="Cargo"></input> <br>
			 
			<input class="inpu" type="text" name="dir" placeholder="Direccion"></input> <br>
			 
			<input class="inpu" type="text" name="tel" placeholder="Telefono"></input> <br>
			 
			<input class="inpu" type="text" name="cel" placeholder="Celular"></input> <br>
			 
			<input class="inpu" type="text" name="usuario" placeholder="Usuario"></input> <br>
			 
			<input class="inpu" type="password" name="contra" placeholder="Contraseña"></input> <br><br>

				<input class="inpu" type="submit" name="enviar" value="Enviar"/>
		</form> -->
		
		<form class="formu_log" action="form_alta.php"  method="POST">
					 <h2 class="titu_form_login">Formulario</h2>
							<div class="form-floating mb-3">
							  <input type="text" name="dni" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">DNI</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Nombre</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="apellido" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Apellido</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="cargo" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Cargo</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="dir" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Direccion</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="tel" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Telefono</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" name="cel" class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword"  class="label">Celular</label>
							</div>
							<div class="form-floating mb-3">
							  <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="name@example.com">
							  <label for="floatingInput" class="label">Usuario</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" name="contra" maxlength="7" minlength="3" id="Input"  class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword"  class="label">Contraseña</label><i class='bi bi-eye-fill'  id='eye' onclick="mostrar()"></i>
							</div>		
							<div class="form mb-3" >
								<select class="form-select form-select-md" name="edad" aria-label=".form-select-sm example">
									  <option selected>Edad</option>
									  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									  <option value="13">13</option>
									  <option value="14">14</option>
									  <option value="15">15</option>
									  <option value="16">16</option>
									  <option value="17">17</option>
									  <option value="18">18</option>
									  <option value="19">19</option>
									  <option value="20">20</option>
									  <option value="21">21</option>
									  <option value="22">22</option>
									  <option value="23">23</option>
									  <option value="24">24</option>
									  <option value="25">25</option>
									  <option value="26">26</option>
									  <option value="27">27</option>
									  <option value="28">28</option>
									  <option value="29">29</option>
									  <option value="30">30</option>
									    <option value="31">31</option>
									  <option value="32">32</option>
									  <option value="33">33</option>
									  <option value="34">34</option>
									  <option value="35">35</option>
									  <option value="36">36</option>
									  <option value="37">37</option>
									  <option value="38">38</option>
									  <option value="39">39</option>
									  <option value="40">40</option>
									  <option value="41">41</option>
									  <option value="42">42</option>
									  <option value="43">43</option>
									  <option value="44">44</option>
									  <option value="45">45</option>
									  <option value="46">46</option>
									  <option value="47">47</option>
									  <option value="48">48</option>
									  <option value="49">49</option>
									  <option value="50">50</option>
									  <option value="51">51</option>
									  <option value="52">52</option>
									  <option value="53">53</option>
									  <option value="54">54</option>
									  <option value="55">55</option>
									  <option value="56">56</option>
									  <option value="57">57</option>
									  <option value="58">58</option>
									  <option value="59">59</option>
									  <option value="60">60</option>
									  <option value="61">61</option>
									  <option value="62">62</option>
									  <option value="63">63</option>
									  <option value="64">64</option>
									  <option value="65">65</option>
									  <option value="66">66</option>
									  <option value="67">67</option>
									  <option value="68">68</option>
									  <option value="69">69</option>
									  <option value="70">70</option>
								</select>
							</div>
							<!--<div class="form-floating mb-3">
								<input type="text" name="fechanac" class="form-control" id="floatingPassword" placeholder="Password" value="">
								<label for="floatingPassword"  class="label">Fecha de Nacimiento</label>
							</div>-->
							<div class="input-group mb-3">
							  <label class="input-group-text bg-white">Fecha de Nac</label>
								<input type='date' name='fechanac' class="inp_fecha" step='1' min='1952-01-01' max='2022-12-31' value='<?php echo date('Y-m-d');?>'>
							</div>
							<div class="form-floating">
								<input type="text" name="permiso" class="form-control" id="floatingPassword" placeholder="Password">
								<label for="floatingPassword"  class="label">Permiso</label>
							</div><br><br>
							<div class="d-grid gap-2 col-6 mx-auto">
								<input type="submit" class="btn btn-outline-Primary" name="enviar"></input>
							</div>	
		</form>
	
       
<?php
 //session_start();
 //error_reporting(0); //E_ALL^E_NOTICE
 error_reporting(0);//desactiva todos los reportes de errores
    if($_POST['enviar']!=""){ //si el boton no está vacio, se hace lo siguiente
    $msql= new mysqli("localhost", "root", "","bd_usuario");
    if($msql->connect_error)
		 die("Error de conexión");
	 
		$msql->query("insert into usuarios(dni,nombre,apellido,cargo,dir,tel,cel, usuario, pass, edad, fechaNac, permiso)values('$_POST[dni]','$_POST[nombre]',
		'$_POST[apellido]','$_POST[cargo]','$_POST[dir]','$_POST[tel]','$_POST[cel]', '$_POST[usuario]', '$_POST[contra]', '$_POST[edad]', '$_POST[fechanac]', '$_POST[permiso]')")
		or die($msql->error);

	?>
	<script language='javascript'>
		alert('El usuario se ha almacenado correctamente.');
		location.href='bienvenido.php';
	</script>
	<?php 
	$msql->close();
	}/*else{
		echo"error";
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
</div>
</body>
</html>
<script type="text/javascript">
	function mostrar()
	{
		var entrada = document.getElementById('Input');
		var ojo = document.getElementById('eye');
			if(entrada.type == "password")
			{
				entrada.type = "text";
				eye.style.opacity=0.8;
			}else
				{
					entrada.type = "password";
					eye.style.opacity=0.2;
				}	
	}
</script>