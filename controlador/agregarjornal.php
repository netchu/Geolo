<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$nombrejornal=$_POST['nombrejornal'];
			if ($nombrejornal==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/agregar.php';</script>";
			}
			else {
			$sql="INSERT INTO `jornaleros` (`numjornal`, `nombrejornal`, `estatus`, `cedula`) VALUES ('".$numjornal."', '".$nombrejornal."', 1, NULL)";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Jornalero agregado exitosamente'); self.location='../vista/agregar.php';</script>";}
			?>
	