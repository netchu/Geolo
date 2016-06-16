<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$estatus=$_POST['estatus'];
			if ($estatus=="" || $amod==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/eliminar.php';</script>";
			}
			else {
			$sql="UPDATE `jornadas` SET `estatus`='".$estatus."',`cedula`=NULL WHERE numjornada='".$amod."'";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Estatus de jornada modificado exitosamente'); self.location='../vista/eliminar.php';</script>";}
			
		?>
	