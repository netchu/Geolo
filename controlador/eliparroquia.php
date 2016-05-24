<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$estatus=$_POST['estatus'];
			$sql="UPDATE `jornaleros` SET `estatus`='".$estatus."',`cedula`=NULL WHERE numjornal='".$amod."'";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al eliminar parroquia";}
				else
			echo "Parroquia eliminada exitosamente";
					echo "<br><a href='../vista/eliminar.php'>Volver a menu eliminar</a>";
		?>
	