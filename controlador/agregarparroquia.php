<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$nombreparro=$_POST['nombreparro'];
			if ($nombreparro==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/agregar.php';</script>";
			}
			else {
			$sql="INSERT INTO `parroquia` (`nombreparro`, `estatus`, `cedula`) VALUES ('".$nombreparro."', 1, NULL)";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Parroquia agregada exitosamente'); self.location='../vista/agregar.php';</script>";}
			
		?>
	