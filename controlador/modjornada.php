<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['jorna'];
			$fechajornada=$_POST['fechajornada'];
			$parroquia=$_POST['parro'];
			$direccion=$_POST['direccion'];
			$tlf=$_POST['tlfcontacto'];
			$descripcion=$_POST['descripcion'];
			if ($fechajornada=="" || $parroquia=="" || $direccion=="" || $tlf=="" || $descripcion==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/modificar.php';</script>";
			}
			else{
			$sql="UPDATE `jornadas` SET `fechajornada`='".$fechajornada."',`numparroquia`='".$parroquia."',`direccion`='".$direccion."',`tlfcontacto`='".$tlf."',`descripcion`='".$descripcion."',`estatus`='1',`cedula`=NULL WHERE numjornada='".$amod."'";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Jornada agregada exitosamente'); self.location='../vista/modificar.php';</script>";}
		?>
	