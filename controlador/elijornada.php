<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$estatus=$_POST['estatus'];
			$sql="UPDATE `jornadas` SET `estatus`='".$estatus."',`cedula`=NULL WHERE numjornada='".$amod."'";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al eliminar jornada";}
				else
			echo "<script>alert('Estatus de jornada modificado exitosamente'); self.location='../vista/eliminar.php';</script>";
		?>
	