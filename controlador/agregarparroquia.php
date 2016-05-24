<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$numparro=$_POST['numparro'];
			$nombreparro=$_POST['nombreparro'];
			$sql="INSERT INTO `parroquia` (`numparroquia`, `nombreparro`, `estatus`, `cedula`) VALUES ('".$numparro."', '".$nombreparro."', 1, NULL)";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al a&ntilde;adir parroquia";}
				else
			echo "Parroquia a&ntilde;adida exitosamente";
					echo "<br><a href='../vista/agregar.php'>Volver a menu agregar</a>";
		?>
	