<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['parro'];
			$numparro=$_POST['numparro'];
			$nombreparro=$_POST['nombreparro'];
			$sql="UPDATE `parroquia` SET `numparroquia`='".$amod."',`nombreparro`='".$nombreparro."',`estatus`='1',`cedula`=NULL WHERE numparroquia='".$amod."'";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al modificar parroquia";}
				else
			echo "Parroquia modificada exitosamente";
					echo "<br><a href='../vista/modificar.php'>Volver a menu modificar</a>";
		?>
	