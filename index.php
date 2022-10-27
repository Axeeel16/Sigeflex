<?php
include "database.php";
$datos = $con->query("select * from person");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Importar Datos de un archivo EXCEL con PHP</h1>

 <form method="post" id="addproduct" action="import.php" enctype="multipart/form-data" role="form">
  <div>
    <label class="col-lg-2 control-label">Archivo (.xlsx)*</label>
      <input type="file" name="name"  id="name" placeholder="Archivo (.xlsx)">
<br><br>
      <button type="submit" class="btn btn-primary">Importar Datos</button>
  </div>
</form>

<p>Formato de los datos [Rut/Rfc, Nombre, Apellidos, Direccion, Email, Telefono]</p>


<?php if($datos->num_rows>0):?>
	<h3>Datos</h3>
	<p>Resultados <?php echo $datos->num_rows; ?></p>
	<table border="1">
	<thead>
		<th>No</th>
		<th>Nombre completo</th>
		<th>Direccion</th>
		<th>Telefono</th>
		<th>Email</th>
		<th>Fecha de creacion</th>
	</thead>
	<?php while($d= $datos->fetch_object()):?>
		<tr>
		<td><?php echo $d->no; ?></td>
		<td><?php echo $d->name." ".$d->lastname; ?></td>
		<td><?php echo $d->address1; ?></td>
		<td><?php echo $d->phone1; ?></td>
		<td><?php echo $d->email1; ?></td>
		<td><?php echo $d->created_at; ?></td>
		</tr>

	<?php endwhile; ?>
</table>
<?php else:?>
	<h3>No hay Datos</h3>
<?php endif; ?>

</body>
</html>