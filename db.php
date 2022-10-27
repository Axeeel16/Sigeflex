<?php
function modificar($dni, $nombre,$apellido, $cargo, $dir,$tel,$cel,$usuario,$pass,$edad,$fechaNac,$permiso, $dniAuxiliar){

	$consulta="UPDATE usuarios SET dni='$dniAuxiliar', nombre='$nombre', apellido='$apellido', cargo='$cargo', dir='$dir',tel='$tel',cel='$cel',usuario='$usuario', pass= '$pass',edad ='$edad',fechaNac= '$fechaNac',permiso= '$permiso'  WHERE dni= '$dni'";
	$msql=mysqli_connect("localhost", "root", "","bd_usuario"); 
	$R= mysqli_query($msql, $consulta);
	if($R){
	  ?>
	  <script language='javascript'>
		  alert('La consulta se ejecuto correctamente');
		   location.href='bienvenido.php';
	  </script>
	  <?php
	}
	  else{
		?>
		<script language='javascript'>
			alert('No se pudo modificar el registro');
			location.href='mod_usuar.php';
		</script>
		<?php
	  }?>
	  <?php
}



function encabezado($nombre,$apellido,$cargo,$imagen){			//

$HoraLocal=date("h:i:s");

$Fecha=date("j/n/y");
?>
<div class="cajaencabezado">
<img width="100px" height="100px" src="imagenes/<?php echo $imagen;?>" class="imagencabezado">
<p class="textoencabezado">
<?php
  echo  "Bienvenido/a ".$nombre." ".$apellido.".<br>"; 
  echo "Su cargo: "; 
  echo $cargo;
  echo ". <br>";
  echo "Inicio de sesion a las: ".$HoraLocal.".<br>";
  echo " Del dia: ".$Fecha;
?>
</p>
</div>
<?php
}


function mostrar_tabla_usuario_con_paginacion(){

 $Enlace=new mysqli("localhost","root","","bd_usuario");
 
 $registro = $Enlace->query("Select * from usuarios")
				or die ($Enlace->error);

// maximo por pagina
$limit = 4;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
echo "<div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 py-1 bg-white'>";
echo "<table class='table table-striped'>        
          <th>id_usuario</th>
		  <th>dni</th>
		  <th>Nombre</th>
		  <th>Apellido</th>
		  <th>Dir</th>
		  <th>Tel</th>
		  <th>Cel</th>
		  <th>Usuario</th>
		  <th>Contraseña</th>
		  <th>Edad</th>
		  <th>Fecha nac</th>
		  <th>Permiso</th>
		  <th colspan='5'>Acciones</th>
      

        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
	$id_usuario=$fila['id_usuario']; 
	$dni=$fila['dni']; 
	$nombre=$fila['nombre'];
	$apellido=$fila['apellido'];
	$cargo=$fila['cargo'];
	$dir=$fila['dir'];  
	$tel=$fila['tel'];
	$cel=$fila['cel'];
	$usuario=$fila['usuario'];
	$password=$fila['pass'];
	$edad=$fila['edad'];
	$fechaNac=$fila['fechaNac'];
	$permiso=$fila['permiso'];
   


  echo "<tr>
           <td>$id_usuario</td>
           <td>$dni</td>
           <td>$nombre</td>
           <td>$apellido</td>
           <td>$dir</td>
           <td>$tel</td>
            <td> $cel</td>
           <td>$usuario</td>
             <td>$password</td>
               <td>$edad</td>
                 <td>$fechaNac</td>
               <td>$permiso</td>
     
         
          
           <td> 
															<div  class='' align='center'>
																 <a href='verdetalle.php?valor=$dni' class='' >
																 <img width='23px' src='imagenes/eye.png' title='Vista'>
																</a>
															</div>
														</td>
														
									<td class='/*IMAGEN*/'> 
															<div  class='eye' align='center'>
																 <a href='Inserta_y_Muestra_Foto.php?valor=$dni' class='' >
																	<img width='18px' src='imagenes/usuario.png' title='Foto de Perfil'>
																</a>
															</div>
														</td>
														
								
								
								<td class='/*MODIFICAR*/'>
																		<div  class='trash' align='center'>
																			<a href='mod_usuar.php?valor=$dni' class='link_m'>
																				<img width='13px' src='imagenes/lapiz.png' title='Modificar'>
																			</a>
																		</div>
																</td>
								<td class='/*ELIMINAR*/'>
																		<div class='trash'>
																			<a href='baja_usuar.php?valor=$dni' class='eliminar_registro'>	
																				<img width='13px' src='imagenes/trash.png' title='Eliminar'>
																			</a>
																		</div>
																	</td>
																	
								<td class='/*Codigo de barras*/'>
																		<div class='trash'>
																			<a href='prueba.php?valor=$dni' class=''>
																				<img width='26px' height='12px' src='imagenes/barcode.png' title='Generar Codigo de Barras'>																				
																			</a>
																		</div>
																	</td>
			
        </tr>";
}
echo "</tbody>  ";
?>

   </table>

	
</div>
<br>
	<div class="hola">
		<nav aria-label="Page navigation example">
		  <ul class="pagination ">
			<?php
			  
				 $totalPag = ceil($total/$limit);
				 $links = array();
				 for( $i=1; $i<=$totalPag ; $i++)
				 {
					$links[] = "<li class='page-item'> <a href=\"?pag=$i\" class='page-link'>$i</a></li>";
				 }
				 echo implode("", $links);
			  ?>
		  </ul>
		</nav>
	</div>
   <?php
}
?>