<?php
session_start();
include 'db.php'; //enlaza al archivo db.php
error_reporting(E_ALL^E_NOTICE);
	//$_SESSION['dni']=$DNI;     	location.href='bienvenido.php';     location.href='mod_usuar.php';			 location.href='bienvenido.php';

	 $id_usuario=$_POST['id_usuario']; //guarda una variable.					 id_usuario='id_usuario',
	 
	$dni=$_POST['dni'];
	$dniAuxiliar=$_POST['dniOculto'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$cargo=$_POST['cargo'];
	$dir=$_POST['dir'];
	$tel=$_POST['tel'];
	$cel=$_POST['cel'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];
	$edad=$_POST['edad'];
	$fechaNac=$_POST['fechanac'];
	$permiso=$_POST['permiso'];
	 
	modificar($dni, $nombre,$apellido, $cargo, $dir,$tel,$cel,$usuario,$pass,$edad,$fechaNac,$permiso, $dniAuxiliar);
 ?>
