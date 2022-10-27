<?php
session_start();
 error_reporting(E_ALL^E_NOTICE);
 	$dni=$_POST['dni'];
 	$nombre=$_POST['nombre'];
 	$apellido=$_POST['apellido'];
 	$dir=$_POST['dir'];
 	$tel=$_POST['tel'];
 	$cel=$_POST['cel'];
	$usuario=$_POST['usuario'];
 	$pass=$_POST['pass'];

		//conectar con la base de datos
	  $mysql= new mysqli("localhost", "root", "","bd_usuario");
	if($mysql->connect_error)
	die("Error de conexión");
	
	$consulta="INSERT INTO usuarios (dni, nombre, apellido, dir, tel, cel, usuario, password) 
	VALUES ('$dni', '$nombre', '$apellido', '$dir', '$tel', '$cel', '$usuario', '$pass')";
	$resultado=mysqli_query($mysql, $consulta);
	
	if($resultado)
	{
		header("location:bienvenido.php");
	}
	else
	{
		echo " Error. No se pudo insertar los datos";
	}
?>