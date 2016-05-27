<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$nuevoapellido=$_POST['nuevoapellido'];
			$nuevacedula=$_POST['nuevacedula'];
			$nuevaclave=md5(md5($_POST['nuevaclave']));
			$usuario=$_POST['usuario'];
			$nuevoperfil=$_POST['nuevoperfil'];
			if ($usuario!=""&&$nuevacedula!=""&&$nuevaclave!=""&&$nuevoapellido!=""&&$nuevoperfil!=""){
			$sql = "SELECT * FROM usuarios WHERE nombre='$usuario'";
			$query=$funcion->consulta($sql);
			if($registro=mysql_fetch_assoc($query)){
			$sql2="UPDATE `usuarios` SET `cedula`='".$nuevacedula."',`apellido`='".$nuevoapellido."',`contrasena`='".$nuevaclave."',`perfil`='".$nuevoperfil."' WHERE nombre='$usuario'";
			$query2=$funcion->consulta($sql2);
			if (!$query2){
			echo "Error al agregar usuario";}
				else
			echo "<script>alert('Informacion modificada correctamente'); self.location='../vista/modiusuario.php?ci=".$nuevacedula."';</script>";
			}
			else {
			echo "<script>alert('Usuario no existe'); self.location='../vista/modiusuario.php?ci=".$nuevacedula."';</script>";	
			}
			}
			else {
				echo "<script>alert('Campos vacios'); self.location='../vista/modiusuario.php?ci=".$nuevacedula."';</script>";
			}
			$bdd=$funcion->cerrar();
		?>