<?php
require('/fpdf/fpdf.php');
require('/BarCode/barcode.inc.php');
$link=mysqli_connect("localhost","root","","bd_usuario") //cambiar esto por su base de datos
or die("Error de conexion"); //En caso de que exista un error se mostrara este cartel



$numero = $_GET["f"];

// cambiar esta consulta sql  por los nombres de los campos de su tabla usuario
$consul = "select nombre, apellido from usuarios where dni = '$numero'"; 
$r = mysqli_query($link,$consul);
$dato = mysqli_fetch_row($r);
$llenar = "00000".$numero;
new barCodeGenrator($llenar,1,'test.gif',190,130, true);

$pdf = new fpdf('P','cm',array(4,5));
$pdf->Addpage();
		$pdf->SetFont('Arial','',7);
		$informacion = "$dato[0] $dato[1]";
		$pdf->Cell(3.9,1,$informacion,1,0,'L');
		
		$pdf->Image('test.gif',1,2,3,1);
		
$pdf->Output();

?>