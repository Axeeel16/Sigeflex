<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Generar Codigo de Barras</title>
<?php 

$Id=$_GET["valor"]; // Este dato viene del archivo principal.php cuando
// hacemos click en la imagen para generar el código de barras de nuestro archivo principal.php
?>
<script>
function generar(){
	var p = document.getElementById("numero");
	var envio = "30generar.php?f="+p.value;
	var r = document.getElementById("impresion");
	r.src = envio;	
}
</script>
				
</head>
<body>
 
<div id = "datos"> 

	Codigo: <input type = "text" value = "<?php echo $Id ?>" id = "numero" size = "10"/>
	
			<input type = "button" id = "button" value = "Generar Cod Barras" onClick = "generar();">
</div>

<div id = "reporte">
	<iframe id = "impresion" width = "100%" height = "100%">
	
	</iframe>
</div>

</body>
</html>