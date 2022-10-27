<?php
session_start();
 //error_reporting(E_ALL^E_NOTICE);
	$usuario=$_POST['usuario'];
 	$pass=$_POST['pass'];

		//conectar con la base de datos
	  $mysql= new mysqli("localhost", "root", "","bd_usuario");
	if($mysql->connect_error)
	die("Error de conexión");
	
	$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$pass' ";
	$resultado=mysqli_query($mysql, $consulta);
					 $sql = "select usuarios.nombre, logineventos.Fecha_Acceso from usuarios inner join logineventos on\n"."logineventos.DNI_Accedido=usuarios.dni";

	$filas=mysqli_num_rows($resultado);
		
	if($filas>0)
	{
	 while($reg = mysqli_fetch_array($resultado))
		{
			$_SESSION['id_usuario']=$reg['id_usuario'];//con la variable creo la variable de session
			$_SESSION['dni']=$reg['dni'];
			$_SESSION['nombre']=$reg['nombre'];
			$_SESSION['apellido']=$reg['apellido'];
			$_SESSION['cargo']=$reg['cargo'];
			$_SESSION['dir']=$reg['dir'];
			$_SESSION['localidad']=$reg['localidad'];
			$_SESSION['tel']=$reg['tel'];
			$_SESSION['cel']=$reg['cel'];
			$_SESSION['usuario']=$reg['usuario'];
			$_SESSION['pass']=$reg['pass'];
			$_SESSION['imagen']=$reg['imagen'];
			$_SESSION['edad']=$reg['edad'];
			$_SESSION['fechaNac']=$reg['fechaNac'];
			$_SESSION['permiso']=$reg['permiso'];
			$_SESSION['Cantidad']=$reg['Cantidad'];
		}
	 header("location:bienvenido.php");
	}
	else {?>
			<script language='javascript'>
				alert('Error con la autentificacion. Usuario y/o Contraseña incorrectos');
				location.href='form_login.html';
			</script>
					<?php
			/*header("location:form_login.html");*/
		}
?>