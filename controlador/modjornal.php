<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$nombrejornal=$_POST['nombrejornal'];
			if ($nombrejornal=="" || $amod==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/modificar.php';</script>";
			}
			else {
			$sql="UPDATE `jornaleros` SET `nombrejornal` = '".$nombrejornal."', `estatus` = '1' WHERE `jornaleros`.`numjornal` = ".$amod." ";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Jornalero modificado exitosamente'); self.location='../vista/modificar.php';</script>";}
		?>
	