<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$fechajornada=$_POST['fechajornada'];
			$parroquia=$_POST['parro'];
			$direccion=$_POST['direccion'];
			$tlf=$_POST['tlfcontacto'];
			$descripcion=$_POST['descripcion'];
			$sql="UPDATE `jornadas` SET `numjornada`='".$amod."',`fechajornada`='".$fechajornada."',`numparroquia`='".$parroquia."',`direccion`='".$direccion."',`tlfcontacto`='".$tlf."',`descripcion`='".$descripcion."',`estatus`='1',`cedula`=NULL WHERE numjornada='".$amod."'";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al modificar jornada";}
				else
			echo "Jornada modificada exitosamente";
					echo "<br><a href='../vista/modificar.php'>Volver a menu modificar</a>";
		?>
	