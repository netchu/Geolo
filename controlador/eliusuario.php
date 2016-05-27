<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$ci=$_REQUEST['ci'];
			$sql="DELETE FROM `usuarios` WHERE cedula='$ci'";
			$query=$funcion->consulta($sql);
			if (!$query){
			echo "Error al eliminar usuario";}
				else
			echo "<script>alert('Usuario eliminado satisfactoriamente'); self.location='../vista/panelusuario.php';</script>";
			$bdd=$funcion->cerrar();
		?>
	