<?php 
 $msql= new mysqli("localhost", "root", "","bd_usuario");
	if($msql->connect_error)
	die("Error de conexión");
	
	$sql="select fechaVenta, montoVenta from ventas order by fechaVenta";
	$resultado=mysqli_query($msql,$sql);
	
	$valoresY=array();		//montos				{}
	$valoresX=array();		//fechas
	
	while ($ver=mysqli_fetch_row($resultado)){
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}
	
	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
	?>
<div id="GraficoBarras"></div>

<script type="text/javascript">
	function crearCadenaBarras(json){		//nos pide un json que ya creamos arriba
		var parsed = JSON.parse(json);		// va a convertir esa cadena json a un objeto json valido que es: parsed
		var arr = [];									// vamos a crear/inicializar un arreglo de javascript
		for (var x in parsed){						//for que funciona como foreach. creamos un objeto x que nos mueva todos nuestros json
			arr.push(parsed[x]);					// metemos dentro del arreglo todos nuestros datos de los json a partir de nuestro indice "[x]"
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX;?>');
	datosY=crearCadenaBarras('<?php echo $datosY;?>');


	var data = [
	  {
		x: datosX,
		y: datosY,
		type: 'bar',
		marker: {
			color: 'rgb(49,130,189)',
			//opacity: 0.7,
		}
	  }
	  
	];
	var layout = {
	  title: 'Grafica de Barras',
	  font:{
		family: 'comic sans ms'
	  },
	  xaxis: {
		title: 'Fechas',
		tickangle: -45
	  },
	   barmode: 'group',
	  yaxis: {
		title: 'Dinero'
	  }
	};
	
	Plotly.newPlot('GraficoBarras', data, layout);
</script>
