<?php
$parro=$_POST['parro'];
require_once('../class.ezpdf.php');
require_once ('../modelo/conex.php');
$funcion->conectar();
	$sql="SELECT jornadas.numjornada, jornadas.fechajornada, jornadas.direccion, jornadas.tlfcontacto, jornadas.descripcion, parroquia.nombreparro FROM jornadas INNER JOIN parroquia ON jornadas.numparroquia=parroquia.numparroquia WHERE jornadas.numparroquia=".$parro."";
	$resSql=$funcion->consulta($sql);
$pdf = new Cezpdf('A4');
$pdf->selectFont('../fonts/Helvetica.afm');
	
	while($row=mysql_fetch_row($resSql)){
		$data[]=array('ID'=>$row[0], 'FECHA'=>$row[1],'DIRECCION'=>$row[2],'TELEFONO'=>$row[3],'RUBROS'=>$row[4],'PARROQUIA'=>$row[5]);
	}
	$titles=array('numjornada'=>'ID', 'fechajornada'=>'FECHA','direccion'=>'DIRECCION','tlfcontacto'=>'TELEFONO DE CONTACTO','descripcion'=>'RUBROS','nombreparro'=>'PARROQUIA');
	/*
$data[] = array('pais'=>'Peru', 'capital'=>'Lima');
$data[] = array('pais'=>'Colombia', 'capital'=>'Bogota');
$data[] = array('pais'=>'Chile', 'capital'=>'Santiago de Chile');
$data[] = array('pais'=>'Brasil', 'capital'=>'Brasilia');
$data[] = array('pais'=>'Ecuador', 'capital'=>'Quito');
$data[] = array('pais'=>'Bolivia', 'capital'=>'La Paz');
$data[] = array('pais'=>'Argentina', 'capital'=>'Buenos Aires');
$data[] = array('pais'=>'Guyana', 'capital'=>'Georgetown');
$data[] = array('pais'=>'Surinam', 'capital'=>'Paramaribo');
$data[] = array('pais'=>'Uruguay', 'capital'=>'Montevideo');
$data[] = array('pais'=>'Paraguay', 'capital'=>'Asuncion');
$data[] = array('pais'=>'Venezuela', 'capital'=>'Caracas');
 
$titles = array('pais'=>'<b>Pais</b>', 'capital'=>'<b>Capital</b>');*/
$pdf->ezTable($data);
$pdf->ezStream();
?>