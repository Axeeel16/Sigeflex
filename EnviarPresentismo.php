<?php
$conexion=mysqli_connect("localhost", "root", "", "bd_usuario"); //conexion 
$Presentes=$_POST["Presentismo"];

$vector = explode("\r\n", trim($Presentes)); // mantengo el salto del linea del textarea y creo un vector

	for ($i = 0; $i < count($vector); $i++) { //recorro el vector
	echo "</br>";
	  echo $lineaNuevaDNI = $vector[$i]; //cargo cada DNI leido en una posicion distinta
	 $consulta="INSERT INTO usuarios (dni) values ('$lineaNuevaDNI')"; // Inserta una fila nueva en mi por cada DNI ingresado

	$resultado=mysqli_query($conexion,$consulta ); //ejecuta la consulta sql y guarda cada DNI en una fila distinta. 
	//Esto lo hace porque este código se encuentra dentro de un for
	 
	 
	}

	if($resultado)
	{ 
		header("Location:bienvenido.php");
	}
?>


