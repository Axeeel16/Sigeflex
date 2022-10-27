<?php

require 'vendor/autoload.php';
require 'database.php';

use PhpSpreadsheet\src\PhpSpreadsheet\IOFactory;
use PhpSpreadsheet\src\PhpSpreadsheet\Cell\Coordinate;

$nombreArchivo = 'ejemplo1.xlsx';
$documento = IOFactory::load($nombreArchivo);
$totalHojas = $documento->getSheetCount();

$hojaActual = $documento->getSheet(0);
$numeroFilas = $hojaActual->getHighesDataRow();
$letra = $hojaActual->getHighesColumn();

$numeroLetra = Coordinate.php::columnIndexFromString($letra);

for($indicaFila = 1; $indicaFila <= $numeroFilas; $indicaFila++){
	$valorA = $hojaActual->getCellByColumnAndRow(1,$indicaFila);
	$valorB = $hojaActual->getCellByColumnAndRow(2,$indicaFila);
	$valorC = $hojaActual->getCellByColumnAndRow(3,$indicaFila);
	$valorD = $hojaActual->getCellByColumnAndRow(4,$indicaFila);
	$valorE = $hojaActual->getCellByColumnAndRow(5,$indicaFila);
	$valorF = $hojaActual->getCellByColumnAndRow(6,$indicaFila);
	
	$sql = "INSERT INTO Person (no, name, lastname, address1, email1, phone1) VALUES
	('$valorA', '$valorB', '$valorC', '$valorD', '$valorE', '$valorF')";
	$con->query($sql);
}

echo "Carga completa";
?>