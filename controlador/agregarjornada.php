<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			
			$fechajornada=$_POST['fechajornada'];
			$parroquia=$_POST['parro'];
			$direccion=$_POST['direccion'];
			$tlfcontacto=$_POST['tlfcontacto'];
			$descripcion=$_POST['descripcion'];
			if ($fechajornada=="" || $parroquia=="" || $direccion=="" || $tlfcontacto=="" || $descripcion==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/agregar.php';</script>";
			}
			else {
			$sql="INSERT INTO `jornadas` (`numjornada`, `fechajornada`, `numparroquia`, `direccion`, `tlfcontacto`, `descripcion`, `numjornal`, `estatus`, `cedula`) VALUES ('".$numjornada."', '".$fechajornada."', '".$parroquia."', '".$direccion."', '".$tlfcontacto."', '".$descripcion."', NULL, 1, NULL);";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Jornada agregada exitosamente'); self.location='../vista/agregar.php';</script>";}
		?>
	