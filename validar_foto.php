<?php
			require 'conexion.php';
			$nom=$_REQUEST["txtnom"];
			$foto=$_FILES["foto"]["name"];
			$ruta=$_FILES["foto"]["tmp_name"];
			$destino=$foto;
			copy($ruta,$destino);
			//mysql_query("insert into usuarios (dni,imagen) values('$nom', '$destino')");
			//	INSERTAR:	insert into usuarios (dni,imagen) values('$nom', '$destino')
			//MODIFICAR:	UPDATE usuarios SET imagen = '$destino' WHERE usuarios.dni = '$nom'
			$consulta = $msql->query("UPDATE usuarios SET imagen = '$destino' WHERE usuarios.dni = '$nom'");
			header("location:bienvenido.php");
	?>
	