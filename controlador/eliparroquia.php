<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$estatus=$_POST['estatus'];
			if ($nombreparro=="" || $amod==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/eliminar.php';</script>";
			}
			else {
			$sql="UPDATE `parroquia` SET `estatus`='".$estatus."',`cedula`=NULL WHERE numparroquia='".$amod."'";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Estatus de parroquia modificado exitosamente'); self.location='../vista/eliminar.php';</script>";}
			
		?>
	