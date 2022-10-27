<?php
session_start();// Incicio la session del usuario que se logueo (QUE ACCEDIÓ AL SISTEMA)


echo $Presentes=$_POST["Presentismo"]; //almacena la variable usuario


//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "bd_usuario"); //conexion 
$consulta="SELECT * FROM usuarios WHERE usuario='$usu' and password='$cont' "; // compara con los datos ingresados 
//en el login, con los que estan guardados en la tabla usuarioraseña
$resultado=mysqli_query($conexion,$consulta ); //ejecuta la consulta sql en la base de la base de datos briandemo
 $filas=mysqli_num_rows($resultado); //almacena el numero de filas
if ($filas>0) //en caso de que filas sea mayor a 0 
 {
	 //echo 'Te has conectado exitosamente a la base de datos y que exite un usuario que tiene la contra y el user ingresado en el login!!';
	 
	$matriz = mysqli_fetch_array ($resultado, MYSQLI_ASSOC);//  convirtiendo el resultado de la consulta sql en una matriz (
	// (mi tabla usuario)
	    $_SESSION['id_usuario']= $matriz["id_usuario"];            
	  $_SESSION['nombre']= $matriz["nombre"]; 
	   $_SESSION['apellido']= $matriz["apellido"];
	  
		 //con el nombre creo una variable de SESSION DEL USUARIO QUE SE LOGEO (ACCEDIO AL SISTEMA)
	 
	 //Version Mejorada con un ciclo repetitivo
	 
	 
	 
header("location:bienvenido.php"); //va a redireccionar la pagina a otra  
	
}
else //en caso de lo contrario en el if
{
	echo "error en la autentificacion"; //se le va a mostrar un mensaje de error
	
header("location:inicioPresentismo.php"); //va a redireccionar la pagina a otra 
}
mysqli_free_result($resultado); //libera los resultados obtenidos
mysqli_close($conexion);
?>

<script>
	// aqui puedo colocar codigo java script
</script>


$sql="INSERT INTO usuarios SET dni='".nl2br($_POST["Presentismo"])."', campos2=...";