<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$clave=md5(md5($_POST['clave']));
			$usuario=$_POST['usuario'];
			$sql = "SELECT * FROM usuarios WHERE nombre='$usuario'";
			$query=$funcion->consulta($sql);
			if($registro=mysql_fetch_assoc($query)){
			if ($registro['contrasena']==$clave){
			echo "<script>alert('Entrando al panel de administracion'); self.location='../vista/paneladmin.php';</script>";
			session_start();
			$_SESSION['cedula']=$registro['cedula'];
			} 
			else {
				echo "<script>alert('Contraseña incorrecta.'); self.location='../index.php';</script>";
				}
			}
			else {
				echo "<script>alert('Usuario no existe.'); self.location='../index.php';</script>";
			}
			$bdd=$funcion->cerrar();
		?>
	