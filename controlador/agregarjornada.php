<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$numjornada=$_POST['numjornada'];
			$fechajornada=$_POST['fechajornada'];
			$parroquia=$_POST['parro'];
			$direccion=$_POST['direccion'];
			$tlfcontacto=$_POST['tlfcontacto'];
			$descripcion=$_POST['descripcion'];
			$sql="INSERT INTO `jornadas` (`numjornada`, `fechajornada`, `numparroquia`, `direccion`, `tlfcontacto`, `descripcion`, `numjornal`, `estatus`, `cedula`) VALUES ('".$numjornada."', '".$fechajornada."', '".$parroquia."', '".$direccion."', '".$tlfcontacto."', '".$descripcion."', NULL, 1, NULL);";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al a&ntilde;adir jornada";}
				else
			echo "Jornada a&ntilde;adida exitosamente";
					echo "<br><a href='../vista/agregar.php'>Volver a menu agregar</a>";
		?>
	