<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$numjornal=$_POST['numjornal'];
			$nombrejornal=$_POST['nombrejornal'];
			$sql="UPDATE `jornaleros` SET `nombrejornal` = '".$nombrejornal."', `estatus` = '1' WHERE `jornaleros`.`numjornal` = ".$amod." ";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al modificar jornalero";}
				else
			echo "Jornalero modificada exitosamente";
					echo "<br><a href='../vista/modificar.php'>Volver a menu modificar</a>";
		?>
	