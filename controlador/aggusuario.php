<?php
			require_once '../modelo/conex.php';
			$funcion->conectar();
			$apellido=$_POST['apellido'];
			$cedula=$_POST['cedula'];
			$clave=md5(md5($_POST['clave']));
			$usuario=$_POST['usuario'];
			$perfil=$_POST['perfil'];
			if ($usuario!=""&&$cedula!=""&&$clave!=""&&$apellido!=""&&$perfil!=""){
			$sql = "SELECT * FROM usuarios WHERE nombre='$usuario'";
			$query=$funcion->consulta($sql);
			if($registro=mysql_fetch_assoc($query)){
				echo "<script>alert('Usuario ya existe'); self.location='../vista/agregarusuario.php';</script>";
			}
			else {
			$sql2="INSERT INTO `usuarios`(`cedula`, `nombre`, `apellido`, `contrasena`, `perfil`) VALUES ('".$cedula."', '".$usuario."', '".$apellido."', '".$clave."', '".$perfil."')";
			$query2=$funcion->consulta($sql2);
			if (!$query2){
			echo "Error al agregar usuario";}
				else
			echo "<script>alert('Informacion cargada correctamente'); self.location='../vista/agregarusuario.php';</script>";
			}
			}
			else {
				echo "<script>alert('Campos vacios'); self.location='../vista/agregarusuario.php';</script>";
			}
			$bdd=$funcion->cerrar();
		?>