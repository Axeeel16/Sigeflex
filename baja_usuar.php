<?php
		session_start();
		 error_reporting(E_ALL^E_NOTICE);
		 
		 $id=$_GET['valor'];

			  $msql= new mysqli("localhost", "root", "","bd_usuario");
			  if($msql->connect_error)
				 die("Error de conexión");
				
				$consulta=("delete from usuarios where dni='$id'");
			
				$ejecutar=mysqli_query($msql,$consulta);
				
				if($ejecutar){
					header("Location:bienvenido.php");
				}else{
					echo "No se pudo eliminar el registro";
					header("Location:bienvenido.php");
				}
				
				$msql->close();
?>