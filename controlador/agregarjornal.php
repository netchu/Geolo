<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$numjornal=$_POST['numjornal'];
			$nombrejornal=$_POST['nombrejornal'];
			$sql="INSERT INTO `jornaleros` (`numjornal`, `nombrejornal`, `estatus`, `cedula`) VALUES ('".$numjornal."', '".$nombrejornal."', 1, NULL)";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al a&ntilde;adir Jotnalero";}
				else
			echo "Jornalero a&ntilde;adida exitosamente";
					echo "<br><a href='../vista/agregar.php'>Volver a menu agregar</a>";
		?>
	