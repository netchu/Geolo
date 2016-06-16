<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$amod=$_POST['parro'];
			$nombreparro=$_POST['nombreparro'];
			if ($nombreparro=="" || $amod==""){
				echo "<script>alert('Campos vacios'); self.location='../vista/modificar.php';</script>";
			}
			else {
			$sql="UPDATE `parroquia` SET `nombreparro`='".$nombreparro."',`estatus`='1',`cedula`=NULL WHERE numparroquia='".$amod."'";
			$query=$funcion->consulta($sql);
			echo "<script>alert('Estatus de parroquia modificado exitosamente'); self.location='../vista/modificar.php';</script>";}
			?>
	